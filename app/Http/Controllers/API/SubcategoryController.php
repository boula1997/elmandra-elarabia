<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubcategoryResource;
use App\Models\Subcategory;
use Exception;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    private $subcategory;
    public function __construct(Subcategory $subcategory)
    {
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        try {
            $data['subcategories'] = SubcategoryResource::collection($this->subcategory->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['subcategory'] = new SubcategoryResource($this->subcategory->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
