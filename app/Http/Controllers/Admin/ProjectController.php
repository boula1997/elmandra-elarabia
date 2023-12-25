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
    private $project;
    function __construct(Testimonial $project)
    {
        $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
        $this->project = $project;
    }

    public function index()
    {
        try {
            $projects = $this->project->latest()->get();
            return view('admin.crud.projects.index', compact('projects'))
                ->with('i', (request()->input('project', 1) - 1) * 5);
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
        return view('admin.crud.projects.create');
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
            $project = $this->project->create($data);
            $project->uploadFile();
            return redirect()->route('projects.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $project)
    {
        return view('admin.crud.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $project)
    {
        // dd($project);
        return view('admin.crud.projects.edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $project)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $project->update($data);
            $project->updateFile();

            return redirect()->route('projects.index', compact('project'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $project)
    {
        try {
            $project->delete();
            $project->deleteFile();
            return redirect()->route('projects.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
