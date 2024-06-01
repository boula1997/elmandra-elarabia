<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BenefitResource;
use App\Models\Benefit;
use Exception;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    private $benefit;
    public function __construct(Benefit $benefit)
    {
        $this->benefit = $benefit;
    }

    public function index()
    {
        try {
            $data['benefits'] = BenefitResource::collection($this->benefit->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['benefit'] = new BenefitResource($this->benefit->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
