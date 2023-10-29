<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Category;
use App\Models\Subcategory;
use Exception;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $product;
    private $testimonial;
    private $team;
    private $process;
    private $subcategory;
    private $portfolio;

    public function __construct(Product $product, Testimonial $testimonial, Team $team, Process $process, Subcategory $subcategory, Gallery $portfolio)
    {
        $this->product = $product;
        $this->testimonial = $testimonial;
        $this->team = $team;
        $this->process = $process;
        $this->subcategory = $subcategory;
        $this->portfolio = $portfolio;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        try {
            $subcategory=$this->subcategory->findorfail($id);
            $products = $subcategory->products;
            return view('front.products.product', compact( 'products','subcategory'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= $this->product->findorfail($id);
        return view('front.products.single-product', compact('product'));
    }

    public function showportfolio($id)
    {
        $portfolio= $this->portfolio->findorfail($id);
        return view('front.portfolio.single_portfolio', compact('portfolio'));
    }
}
