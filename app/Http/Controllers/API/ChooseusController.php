<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChooseusResource;
use App\Models\Chooseus;
use Exception;
use Illuminate\Http\Request;

class ChooseusController extends Controller
{
    private $chooseus;
    public function __construct(Chooseus $chooseus)
    {
        $this->chooseus = $chooseus;
    }

    public function index()
    {
        try {
            $data['chooseuss'] = ChooseusResource::collection($this->chooseus->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['chooseus'] = new ChooseusResource($this->chooseus->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
