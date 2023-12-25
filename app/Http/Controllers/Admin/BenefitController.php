<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TestimonialRequest;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class TestimonialController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $benefit;
    function __construct(Testimonial $benefit)
    {
        $this->middleware('permission:benefit-list|benefit-create|benefit-edit|benefit-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:benefit-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:benefit-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:benefit-delete', ['only' => ['destroy']]);
        $this->benefit = $benefit;
    }

    public function index()
    {
        try {
            $benefits = $this->benefit->latest()->get();
            return view('admin.crud.benefits.index', compact('benefits'))
                ->with('i', (request()->input('benefit', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $benefit = $this->benefit->create($data);
            $benefit->uploadFile();
            return redirect()->route('benefits.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $benefit)
    {
        return view('admin.crud.benefits.show', compact('benefit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $benefit)
    {
        // dd($benefit);
        return view('admin.crud.benefits.edit', compact('benefit'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $benefit)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $benefit->update($data);
            $benefit->updateFile();

            return redirect()->route('benefits.index', compact('benefit'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $benefit)
    {
        try {
            $benefit->delete();
            $benefit->deleteFile();
            return redirect()->route('benefits.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
