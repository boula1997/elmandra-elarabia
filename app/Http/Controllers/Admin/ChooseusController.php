<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChooseusRequest;
use Illuminate\Support\Facades\File;
use App\Models\Chooseus;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class ChooseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $chooseus;
    function __construct(Chooseus $chooseus)
    {
        $this->middleware('permission:chooseus-list|chooseus-create|chooseus-edit|chooseus-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:chooseus-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:chooseus-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:chooseus-delete', ['only' => ['destroy']]);
        $this->chooseus = $chooseus;
    }


    public function index()
    {
        try {
            $chooseuss = $this->chooseus->latest()->get();
            return view('admin.crud.chooseuss.index', compact('chooseuss'))
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
        return view('admin.crud.chooseuss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChooseusRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $chooseus= $this->chooseus->create($data);
            $chooseus->uploadFile();
            return redirect()->route('chooseuss.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $chooseus=Chooseus::find($id);
        return view('admin.crud.chooseuss.show', compact('chooseus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $chooseus=Chooseus::find($id);
        return view('admin.crud.chooseuss.edit', compact('chooseus'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function update(ChooseusRequest $request, Chooseus $chooseus)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $chooseus->update($data);
            $chooseus->updateFile();
            return redirect()->route('chooseuss.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chooseus $chooseus)
    {
        try {
            $chooseus->delete();
            $chooseus->file->delete();
            $chooseus->deleteFile();
            return redirect()->route('chooseuss.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
