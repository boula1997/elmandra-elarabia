<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessageUserMail;
use App\Models\Message;
use App\Models\Offer;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $message;


    public function __construct(message $message)
    {
        $this->message = $message;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $offers=Offer::get();
            return view('front.message',compact('offers'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        try {
            $data = $request->all();
            $message = $this->message->create($data);
            Mail::to(env('MAIL_FROM_NAME'))->send(new MessageUserMail($message));
            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
