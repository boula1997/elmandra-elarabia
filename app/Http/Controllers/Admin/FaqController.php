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
    private $faq;
    function __construct(Testimonial $faq)
    {
        $this->middleware('permission:faq-list|faq-create|faq-edit|faq-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:faq-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:faq-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:faq-delete', ['only' => ['destroy']]);
        $this->faq = $faq;
    }

    public function index()
    {
        try {
            $faqs = $this->faq->latest()->get();
            return view('admin.crud.faqs.index', compact('faqs'))
                ->with('i', (request()->input('faq', 1) - 1) * 5);
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
        return view('admin.crud.faqs.create');
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
            $faq = $this->faq->create($data);
            $faq->uploadFile();
            return redirect()->route('faqs.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $faq)
    {
        return view('admin.crud.faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $faq)
    {
        // dd($faq);
        return view('admin.crud.faqs.edit', compact('faq'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $faq)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $faq->update($data);
            $faq->updateFile();

            return redirect()->route('faqs.index', compact('faq'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $faq)
    {
        try {
            $faq->delete();
            $faq->deleteFile();
            return redirect()->route('faqs.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
