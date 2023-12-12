<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MarketerResource;
use App\Models\Marketer;
use Exception;
use Illuminate\Http\Request;

class MarketerController extends Controller
{
    private $marketer;
    public function __construct(Marketer $marketer)
    {
        $this->marketer = $marketer;
    }

    public function index()
    {
        try {
            $data['marketers'] = MarketerResource::collection($this->marketer->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['marketer'] = new MarketerResource($this->marketer->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
