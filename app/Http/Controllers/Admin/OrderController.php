<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\OrderRequest as APIOrderRequest;
use App\Http\Requests\Dashboard\OrderRequest;
use App\Http\Requests\OrderRequest as RequestsOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\StoreProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $order;
    function __construct(Order $order)
    {
        $this->middleware('permission:order-list|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
        $this->middleware('permission:order-reply', ['only' => ['reply']]);
        $this->order = $order;
    }


    public function index()
    {
        try {
            $data = $this->order->latest()->get();
            return view('admin.crud.orders.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.crud.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        // $products=Product::get();
        return view('admin.crud.orders.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        try {
            dd($request);
            $data = $request->except('image','profile_avatar_remove');
            $order->update($data);
            return redirect()->route('orders.index', compact('order'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        try {
        //    dd($order->status=='delivered');
           if($order->status=='delivered')
           {
            // dd("trueeeeeee");
            $order->delete();
            return redirect()->route('orders.index')
                ->with('success', trans('general.deleted_successfully'));
           }
        //    dd("falseee");
            $orderproducts=Orderproduct::where('order_id',$order->id)->get();
            foreach($orderproducts as $orderproduct){
                $orderproduct->product->update(['stock'=> $orderproduct->product->stock +$orderproduct->count ]);

                $storeproduct =StoreProduct::where('store_id',$orderproduct->store_id)->where('product_id',$orderproduct->product->id)->first();
                
                $storeproduct->update(['quantity'=>$storeproduct->quantity +$orderproduct->count ]);
                }
            $order->delete();
            return redirect()->route('orders.index')
                ->with('success', trans('general.deleted_successfully'));
           
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply($id)
    {
        try {
            $order=$this->order->find($id);
            return view('admin.crud.orders.reply',compact('order'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply($id,OrderRequest $request)
    {
        try {
            $data = $request->all();
            $order=$this->order->find($id);
            // Mail::to($order->email)->send(new OrderAdminMail($data));
            return redirect()->route('orders.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
