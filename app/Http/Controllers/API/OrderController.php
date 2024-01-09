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
            $order = Order::create($request->all());
            foreach($request->items as $item){
                $orderproduct=$this->orderproduct->create([
                    'order_id' => $order->id,
                    'product_id' => $item->getId(),
                    'count' => $item->quantity,
                    'total' => $item->quantity * $item->price,
                ]);

                $product=$orderproduct->product;
                $product->update(['stock'=> $product->stock-$item->quantity]);
            }
            return successResponse($order);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
