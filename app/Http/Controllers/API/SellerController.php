<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SellerResource;
use App\Models\Seller;
use Exception;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    private $seller;
    public function __construct(Seller $seller)
    {
        $this->seller = $seller;
    }

    public function index()
    {
        try {
            $data['sellers'] = SellerResource::collection($this->seller->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['seller'] = new SellerResource($this->seller->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
