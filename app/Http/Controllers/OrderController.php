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
use App\Models\Product;
use App\Models\Offer;
use Exception;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $order;
    private $orderproduct;
    private $offers;


    public function __construct(Order $order, Orderproduct $orderproduct,Offer $offers)
    {
        $this->order = $order;
        $this->orderproduct = $orderproduct;
        $this->offers = $offers;
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
            $data = $request->except('store_id');
            $data['total']=cart()->getTotal()+50;
            $data['user_id']=auth('web')->user()->id;
            $order = $this->order->create($data);
           
            foreach(cart()->getItems() as $item){
               
               
                $orderproduct=$this->orderproduct->create([
                    'status' => orderproductStatus($item->get('quantity'),$request->store_id,$item->getId()),
                    'order_id' => $order->id,
                    'store_id' => $request->store_id,
                    'product_id' => $item->getId(),
                    'count' => $item->get('quantity'),
                    'total' => $item->get('quantity') * $item->getPrice(),
                ]);
                $product=$orderproduct->product;
                $product->update(['stock'=> $product->stock-$item->get('quantity')]);
            }
         
            cart()->destroy();
            // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new OrderUserMail($order));
            return response()->json(['success' => __('general.sent_successfully'),'count'=>count(cart()->getItems())]);
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    public function showOrders(){
        $offers =$this->offers->get();
        return view('front.order_index',compact('offers'));
    }

    public function showOneOrder($id)
    {
        $order = Order::find($id);
        // $orderproducts=Orderproduct::find($id)->all();
        // dd($order);
        return view('front.single_order',compact('order'));
    }
}

