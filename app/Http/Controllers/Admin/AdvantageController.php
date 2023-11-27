<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdvantageRequest;
use Illuminate\Support\Facades\File;
use App\Models\Advantage;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $advantage;
    function __construct(Advantage $advantage)
    {
        $this->middleware('permission:advantage-list|advantage-create|advantage-edit|advantage-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:advantage-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:advantage-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:advantage-delete', ['only' => ['destroy']]);
        $this->advantage = $advantage;
    }


    public function index()
    {
        try {
            $advantages = $this->advantage->latest()->get();
            return view('admin.crud.advantages.index', compact('advantages'))
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
        return view('admin.crud.advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvantageRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $advantage = $this->advantage->create($data);
            $advantage->uploadFile();
            // $this->advantage->create($request->all());
            return redirect()->route('advantages.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function show(Advantage $advantage)
    {
        return view('admin.crud.advantages.show', compact('advantage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function edit(Advantage $advantage)
    {
        //    dd($advantage->title);
        return view('admin.crud.advantages.edit', compact('advantage'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $advantage
     * @return \Illuminate\Http\Response
     */
    public function update(AdvantageRequest $request, Advantage $advantage)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $advantage->update($data);
            $advantage->updateFile();
            return redirect()->route('advantages.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advantage $advantage)
    {
        try {
            $advantage->delete();
            $advantage->deleteFile();
            return redirect()->route('advantages.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
