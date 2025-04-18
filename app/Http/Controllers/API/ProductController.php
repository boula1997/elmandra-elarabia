<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        try {
            $data['trailersCranes_section'] = new PageResource(page('trailersCranes'));
            $data['spareParts_section'] = new PageResource(page('spareParts'));
            $data['tractorUnits_section'] = new PageResource(page('tractorUnits'));
            
            $data['products'] = ProductResource::collection($this->product->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
    public function store()
    {
        try {
           
            $data['trailersCranes_section'] = new PageResource(page('trailersCranes'));
            $data['spareParts_section'] = new PageResource(page('spareParts'));
            $data['tractorUnits_section'] = new PageResource(page('tractorUnits'));
            if(isset(request()->type) || request()->type="")
            $products=$this->product->where('kind',request()->type)->get();
            else
            $products=$this->product->search()->get();
            
            $data['products'] = ProductResource::collection($products);
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $product=$this->product->findorfail($id);
            $data['product'] = new ProductResource($this->product->findorfail($id));
            $data['related_products'] = ProductResource::collection(Product::where('id','!=',$id)->where('category_id',$product->category_id)->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}