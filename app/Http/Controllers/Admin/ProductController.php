<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use App\Models\Subcategory;
use Exception;

class ProductController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $product;
    private $category;
    private $subcategory;
    private $company;
    function __construct(Product $product,Category $category,Company $company,Subcategory $subcategory)
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->company = $company;
    }

    public function index()
    {
        try {
            $products = $this->product->latest()->get();
            return view('admin.crud.products.index', compact('products'))
                ->with('i', (request()->input('product', 1) - 1) * 5);
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
        // dd('eee');
        $categories=$this->category->latest()->get();
        $subcategories=$this->subcategory->latest()->get();
        $companies=$this->company->latest()->get();
        return view('admin.crud.products.create',compact('categories','companies','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $data = $request->except('image','images','profile_avatar_remove');
            if ($request->has('used_car')) {
                $data['used_car'] = 1;
            
            }else{
                $data['used_car'] = 0;
            }
            $product = $this->product->create($data);
            $product->uploadFile();
            $product->uploadFiles();
            return redirect()->route('products.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = $product->images;
        return view('admin.crud.products.show', compact('product','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $companies=$this->company->get();
        $images = $product->images;
        $categories=$this->category->get();
        $subcategories=$this->subcategory->latest()->get();

        return view('admin.crud.products.edit', compact('product','categories','images','companies','subcategories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            $data = $request->except('image','images','profile_avatar_remove','delimages');
            if ($request->has('used_car')) {
                $data['used_car'] = 1;
            
            }else{
                $data['used_car'] = 0;
            }
            $product->update($data);
            $product->updateFile();
            $product->updateFiles();
            $product->uploadFiles();
            return redirect()->route('products.index', compact('product'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            $product->deleteFile();
            return redirect()->route('products.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}