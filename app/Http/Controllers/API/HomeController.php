<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CounterResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $slider;
    private $counter;
    private $service;
    private $team;
    private $feature;
    private $testimonial;
    private $partner;
    public function __construct(Partner $partner,Slider $slider,Counter $counter,Service $service,Team $team,Feature $feature,Testimonial $testimonial)
    {
        $feature->counter = $counter;
        $this->slider = $slider;
        $this->service = $service;
        $this->team = $team;
        $this->feature = $feature;
        $this->testimonial = $testimonial;
        $this->partner = $partner;
    }

    public function index()
    {
        try {
            $data['sliders'] = SliderResource::collection($this->slider->get());
            $data['about-section'] = new PageResource(page('about'));
            $data['counters'] = CounterResource::collection($this->counter->get());
            $data['service-section'] = new PageResource(page('service'));
            $data['services'] = ServiceResource::collection($this->service->get());
            $data['teams'] = TeamResource::collection($this->team->get());
            $data['features'] = FeatureResource::collection($this->feature->get());
            $data['testimonials'] = TestimonialResource::collection($this->testimonial->get());
            $data['partners'] = PartnerResource::collection($this->partner->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }


}
