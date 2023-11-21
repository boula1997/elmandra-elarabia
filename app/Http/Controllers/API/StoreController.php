<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreResource;
use App\Models\Store;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $store;
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function index()
    {
        try {
            $data['stores'] = StoreResource::collection($this->store->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['store'] = new StoreResource($this->store->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
