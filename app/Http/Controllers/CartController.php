<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Offer;
use Exception;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class CartController extends Controller
{
    public $cart, $product, $favourite, $offers;
    public function __construct(Cart $cart, Product $product,Offer $offers)
    {
        $this->cart = cart();
        $this->favourite = favourite();
        $this->product = $product;
        $this->offers = $offers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getCartItems()
    {
        $offers=$this->offers->get();
        $items = $this->cart->getItems();
        return view('front.cart', compact('items','offers'));
    }

    public function getFavourites()
    {
        $items = $this->favourite->getItems();
        return view('front.favourite', compact('items'));
    }

    public function addToCart($id)
    {
        try {
            $product = $this->product->findorfail($id);

            $item=$this->cart->addItem(['model' => $product,'id'=>$id,'title' => $product->title,'price' => $product->price]);
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'hash'=>$item->getHash()]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    public function addToFavourite($id)
    {
        try {
            $product = $this->product->findorfail($id);
            $this->favourite->addItem(['model' => $product, 'price' => $product->price]);
            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    public function removeItemCart($hash)
    {
        try {
            $this->cart->removeItem($hash);
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'total'=>cart()->getTotal()]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    public function removeItemFavourite($hash)
    {
        try {
            $this->favourite->removeItem($hash);
            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }


    public function updateItemCount($hash, $quantity)
    {
        try {
            
            $updatedItem = $this->cart->updateItem($hash, [
                'quantity'      => $quantity,
            ]);
            
            
            if($quantity==0)
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'total'=>cart()->getTotal()]);
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'price'=>$updatedItem->get('price'),'quantity'=>$updatedItem->get('quantity'),'total'=>cart()->getTotal()]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => __($e->getMessage())]);
        }
    }



}
