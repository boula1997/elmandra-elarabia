<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderMail;
use App\Mail\OrderUserMail;
use App\Models\Order;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Counter;
use App\Models\Orderproduct;
use Exception;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $order;
    private $orderproduct;


    public function __construct(order $order, Orderproduct $orderproduct)
    {
        $this->order = $order;
        $this->orderproduct = $orderproduct;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            return view('front.order');
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
    public function store(OrderRequest $request)
    {
        try {
            $data = $request->all();
            $order = $this->order->create($data);
            foreach(cart()->getItems() as $item){
                $this->orderproduct->create([
                    'order_id' => $order->id,
                    'product_id' => $item->getId(),
                    'count' => $item->get('quantity'),
                    'total' => $item->get('quantity') * $item->getPrice(),
                ]);
            }
            cart()->destroy();
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new OrderUserMail($order));
            return response()->json(['success' => __('general.sent_successfully')]);
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
