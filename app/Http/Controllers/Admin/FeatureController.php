<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FeatureRequest;
use Illuminate\Support\Facades\File;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $feature;
    function __construct(Feature $feature)
    {
        $this->middleware('permission:feature-list|feature-create|feature-edit|feature-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:feature-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:feature-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:feature-delete', ['only' => ['destroy']]);
        $this->feature = $feature;
    }


    public function index()
    {
        try {
            $features = $this->feature->latest()->get();
            return view('admin.crud.features.index', compact('features'))
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
        return view('admin.crud.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $feature= $this->feature->create($data);
            $feature->uploadFile();
            return redirect()->route('features.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('admin.crud.features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //    dd($feature->title);
        return view('admin.crud.features.edit', compact('feature'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureRequest $request, Feature $feature)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $feature->update($data);
            $feature->updateFile();
            return redirect()->route('features.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        try {
            $feature->delete();
            $feature->file->delete();
            $feature->deleteFile();
            return redirect()->route('features.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
