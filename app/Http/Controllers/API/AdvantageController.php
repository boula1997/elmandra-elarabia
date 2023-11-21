<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvantageResource;
use App\Models\Advantage;
use Exception;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    private $advantage;
    public function __construct(Advantage $advantage)
    {
        $this->advantage = $advantage;
    }

    public function index()
    {
        try {
            $data['advantages'] = AdvantageResource::collection($this->advantage->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['advantage'] = new AdvantageResource($this->advantage->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
