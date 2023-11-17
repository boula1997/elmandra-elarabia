<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Product;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $testimonial;
    private $team;
    private $counter;
    private $teams;
    private $partners;
    private $slider;
    private $subcategory;
    private $products;

    public function __construct( Testimonial $testimonial, Team $team, Counter $counter,Team $teams,Partner $partners,Slider $slider,Subcategory $subcategory,Product $products)
    {
        $this->testimonial = $testimonial;
        $this->team = $team;
        $this->counter = $counter;
        $this->teams=$teams;
        $this->partners=$partners;
        $this->slider=$slider;
        $this->subcategory=$subcategory;
        $this->products=$products;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $products=$this->products->get();
            $testimonials = $this->testimonial->get();
            $teams = $this->team->get();
            $counters = $this->counter->get();
            $teams=$this->teams->get();
            $partners=$this->partners->get();
            $sliders=$this->slider->get();
            $subcategories=$this->subcategory->get();

            return view('front.index', compact('testimonials', 'teams', 'counters','teams','partners','sliders','subcategories','products'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
