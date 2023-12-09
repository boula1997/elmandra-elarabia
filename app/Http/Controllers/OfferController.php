<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Dashboard\OfferRequest;
use Illuminate\Support\Facades\File;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $offer;
    function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }


    public function index()
    {
        try {
            $offers = $this->offer->latest()->get();
            return view('admin.crud.offers.index', compact('offers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(OfferRequest $request)
    // {
    //     try {
    //         $data = $request->except('image','profile_avatar_remove');
    //         $offer = $this->offer->create($data);
    //         $offer->uploadFile();
    //         return redirect()->route('offers.index')
    //             ->with('success', trans('general.created_successfully'));
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //         return redirect()->back()->with(['error' => __('general.something_wrong')]);
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('admin.crud.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //    dd($offer->title);
        return view('admin.crud.offers.edit', compact('offer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $offer
     * @return \Illuminate\Http\Response
     */
    // public function update(OfferRequest $request, Offer $offer)
    // {
    //     try {
    //         $data = $request->except('image','profile_avatar_remove');
    //         $offer->update($data);
    //         $offer->updateFile();
    //         return redirect()->route('offers.index')
    //             ->with('success', trans('general.update_successfully'));
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //         return redirect()->back()->with(['error' => __('general.something_wrong')]);
    //     }
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        try {
            $offer->delete();
            $offer->deleteFile();
            return redirect()->route('offers.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function showoffers()
    {
        $offers= Offer::get();
        //    dd($offers);
        return view('front.offers', compact('offers'));
    }

}

