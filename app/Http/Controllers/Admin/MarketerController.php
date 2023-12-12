<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marketer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\MarketerRequest;
use Exception;

class MarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $marketer;
    function __construct(Marketer $marketer)
    {
        $this->middleware('permission:marketer-list|marketer-create|marketer-edit|marketer-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:marketer-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:marketer-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:marketer-delete', ['only' => ['destroy']]);
        $this->marketer = $marketer;
    }


    public function index()
    {
        try {
            $marketers = $this->marketer->latest()->get();
            return view('admin.crud.marketers.index', compact('marketers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('admin.crud.marketers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarketerRequest $request)
    {
        try {
            $this->marketer->create($request->all());
            return redirect()->route('marketers.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function show(Marketer $marketer)
    {
        return view('admin.crud.marketers.show', compact('marketer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketer $marketer)
    {
        //    dd($marketer->title);
        return view('admin.crud.marketers.edit', compact('marketer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $marketer
     * @return \Illuminate\Http\Response
     */
    public function update(MarketerRequest $request, Marketer $marketer)
    {
        try {
            $data = $request->all();
            $marketer->update($data);
            return redirect()->route('marketers.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketer $marketer)
    {
        try {
            $marketer->delete();
            return redirect()->route('marketers.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
