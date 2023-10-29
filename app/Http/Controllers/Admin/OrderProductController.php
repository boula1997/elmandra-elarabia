<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orderproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class OrderproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $orderproduct;
    function __construct(Orderproduct $orderproduct)
    {
        $this->middleware('permission:orderproduct-list|orderproduct-create|orderproduct-edit|orderproduct-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:orderproduct-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:orderproduct-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:orderproduct-delete', ['only' => ['destroy']]);
        $this->orderproduct = $orderproduct;
    }

    public function index()
    {
        try {
            $orderproducts = $this->orderproduct->latest()->get();
            return view('admin.crud.orderproducts.index', compact('orderproducts'))
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
        return view('admin.crud.orderproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->orderproduct->create($request->all());
            return redirect()->route('orderproducts.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Orderproduct $orderproduct)
    {
        return view('admin.crud.orderproducts.show', compact('orderproduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderproduct $orderproduct)
    {
        //    dd($orderproduct->title);
        return view('admin.crud.orderproducts.edit', compact('orderproduct'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderproduct $orderproduct)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $orderproduct->update($data);
            return redirect()->route('orderproducts.index', compact('orderproduct'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderproduct $orderproduct)
    {
        try {
            $orderproduct->delete();
            return redirect()->route('orderproducts.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
