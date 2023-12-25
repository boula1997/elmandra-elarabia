<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BenefitResource;
use App\Http\Resources\CounterResource;
use App\Http\Resources\FaqResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\ProjectResource;
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
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Benefit;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $slider;
    private $counter;

    public function __construct(Partner $partner,Slider $slider,Counter $counter,)
    {
        $this->counter = $counter;
        $this->slider = $slider;

    }
    public function index()
    {
        try {
            $data['about-section'] = new PageResource(page('about'));
            $data['vision-section'] = new PageResource(page('vision'));
            $data['mission-section'] = new PageResource(page('mission'));

            $data['counters'] = CounterResource::collection($this->counter->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }


}
