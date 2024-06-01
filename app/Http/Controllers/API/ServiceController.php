<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use App\Models\Process;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    private $process;
    public function __construct(Service $service,Process $process)
    {
        $this->service = $service;
        $this->process = $process;
    }

    public function index()
    {
        try {
            $data['service-section'] = new PageResource(page('service'));
            $data['services'] = ServiceResource::collection($this->service->get());

            $data['process-section'] = new PageResource(page('process'));
            $data['processes'] = ServiceResource::collection($this->process->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['service'] = new ServiceResource($this->service->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
