<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvertisementResource;
use App\Models\Advertisement;
use Exception;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    private $advertisement;
    public function __construct(Advertisement $advertisement)
    {
        $this->advertisement = $advertisement;
    }

    public function index()
    {
        try {
            $data['advertisements'] = AdvertisementResource::collection($this->advertisement->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['advertisement'] = new AdvertisementResource($this->advertisement->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
