<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdvertisementRequest;
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
            $this->advertisement->create($request->all());
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
            $data = $request->all();
            $advertisement->update($data);
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
            return redirect()->route('advertisements.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
