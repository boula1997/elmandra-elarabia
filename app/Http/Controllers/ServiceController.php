<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Counter;
use Exception;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;
    private $testimonial;
    private $slider;
    private $process;
    private $counter;
    private $portfolio;

    public function __construct(Service $service, Testimonial $testimonial, Slider $slider, Process $process, Counter $counter, Gallery $portfolio)
    {
        $this->service = $service;
        $this->testimonial = $testimonial;
        $this->slider = $slider;
        $this->process = $process;
        $this->counter = $counter;
        $this->portfolio = $portfolio;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $services = $this->service->get();
            return view('front.services.service', compact( 'services'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service= $this->service->findorfail($id);
        return view('front.services.single-service', compact('service'));
    }
}
