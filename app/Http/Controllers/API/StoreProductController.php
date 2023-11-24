<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreProductResource;
use App\Models\StoreProduct;
use Exception;
use Illuminate\Http\Request;

class StoreProductController extends Controller
{
    private $storeProduct;
    public function __construct(StoreProduct $storeProduct)
    {
        $this->storeProduct = $storeProduct;
    }

    public function index()
    {
        try {
            $data['storeProducts'] = StoreProductResource::collection($this->storeProduct->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['storeProduct'] = new StoreProductResource($this->storeProduct->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
