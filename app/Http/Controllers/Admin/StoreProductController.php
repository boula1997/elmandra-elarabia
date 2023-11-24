<?php

namespace App\Http\Controllers\Admin;

use App\Models\StoreProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreProductRequest;
use Exception;

class StoreProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $storeProduct;
    function __construct(StoreProduct $storeProduct)
    {
        $this->middleware('permission:storeProduct-list|storeProduct-create|storeProduct-edit|storeProduct-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:storeProduct-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:storeProduct-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:storeProduct-delete', ['only' => ['destroy']]);
        $this->storeProduct = $storeProduct;
    }


    public function index()
    {
        try {
            $storeProducts = $this->storeProduct->latest()->get();
            return view('admin.crud.storeProducts.index', compact('storeProducts'))
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
        return view('admin.crud.storeProducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $this->storeProduct->create($request->all());
            return redirect()->route('storeProducts.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreProduct  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(StoreProduct $storeProduct)
    {
        return view('admin.crud.storeProducts.show', compact('storeProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreProduct  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreProduct $storeProduct)
    {
        //    dd($storeProduct->title);
        return view('admin.crud.storeProducts.edit', compact('storeProduct'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, StoreProduct $storeProduct)
    {
        try {
            $data = $request->all();
            $storeProduct->update($data);
            return redirect()->route('storeProducts.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreProduct  $storeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreProduct $storeProduct)
    {
        try {
            $storeProduct->delete();
            return redirect()->route('storeProducts.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
