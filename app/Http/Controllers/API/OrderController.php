<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\OrderRequest;
use App\Models\Order;
use App\Models\Orderproduct;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    
    private $order;
    private $orderproduct;


    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->order = $order;
        $this->orderproduct = $orderproduct;
    }
    
    public function store(OrderRequest $request)
    {


        try {
            $order = Order::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'total'=>$request->totalPrice,
            'user_id'=>1,
            ]);

            // dd($request->items);
            foreach($request->items as $item){
                $orderproduct=$this->orderproduct->create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'count' => $item['qty'],
                    'total' => $item['totalPrice'],
                ]);

                $product=$orderproduct->product;
                // $product->update(['stock'=> $product->stock-$item['qty']]);
            }
            return successResponse($order);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
