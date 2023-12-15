<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdvertisementRequest;
use Illuminate\Support\Facades\File;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $advertisement;
    function __construct(Advertisement $advertisement)
    {
        $this->middleware('permission:advertisement-list|advertisement-create|advertisement-edit|advertisement-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:advertisement-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:advertisement-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:advertisement-delete', ['only' => ['destroy']]);
        $this->advertisement = $advertisement;
    }


    public function index()
    {
        try {
            $advertisements = $this->advertisement->latest()->get();
            return view('admin.crud.advertisements.index', compact('advertisements'))
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
        return view('admin.crud.advertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $advertisement = $this->advertisement->create($data);
            $advertisement->uploadFile();
            return redirect()->route('advertisements.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.crud.advertisements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //    dd($advertisement->title);
        return view('admin.crud.advertisements.edit', compact('advertisement'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(AdvertisementRequest $request, Advertisement $advertisement)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $advertisement->update($data);
            $advertisement->updateFile();
            return redirect()->route('advertisements.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        try {
            $advertisement->delete();
            $advertisement->deleteFile();
            return redirect()->route('advertisements.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function adStatus($id){

        try {
            $advertisement = Advertisement::findorfail($id);
            $advertisement->update(['status'=>!$advertisement->status]);
            $status=$advertisement->status?'ظاهر':'مختفي';
            $class=$advertisement->status?'badge-success':'badge-danger';
            $removeClass=$advertisement->status?'badge-danger':'badge-success';
            return response()->json(['success' => trans('general.edit_successfully'),'status'=>$status,'class'=>$class,'removeClass'=>$removeClass]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
