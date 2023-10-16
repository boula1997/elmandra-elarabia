<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        try {
            $data['sliders'] = SliderResource::collection($this->slider->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['slider'] = new SliderResource($this->slider->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
