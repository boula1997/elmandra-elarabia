<?php

use App\Models\Admin;
use App\Models\Advantage;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Company;
use App\Models\Message;
use App\Models\Counter;
use App\Models\Newsletter;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Page;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Review;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Jackiedo\Cart\Facades\Cart;
use Spatie\Permission\Models\Role;

const Message_Mail = "app@gmail.com";

const Newsletter_Mail = "app@gmail.com";
function settings()
{
    return Setting::first();
}

function page($identifier)
{
    return Page::where('identifier', $identifier)->first();
}

function upload_image($file)
{
    $path = $file->store('images');
    $file->move('images', $path);
    return $path;
}


function delete_file($file)
{
    if (file_exists($file))
        File::delete($file);
}

function successResponse($data = [], $message = "success", $status = 200)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function failedResponse($data = [], $message = "error", $status = 400)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function itemsCount($model)
{
    $items = [
        "categories" => count(Category::get()),
        "subcategories" => count(Subcategory::get()),
        "messages" => count(Message::get()),
        "counters" => count(Counter::get()),
        "newsletters" => count(Newsletter::get()),
        "contacts" => count(Contact::get()),
        "pages" => count(Page::get()),
        "teams" => count(Team::get()),
        "products" => count(Product::get()),
        "features" => count(Feature::get()),
        "testimonials" => count(Testimonial::get()),
        "partners" => count(Partner::get()),
        "sliders" => count(Slider::get()),
        "users" => count(User::get()),
        "roles" => count(Role::get()),
        "advertisements" => count(Advertisement::get()),
        "advantages" => count(Advantage::get()),
        "companies" => count(Company::get()),
        "adminsAdmin" => count(Admin::where('type','Admin')->get()),
        "sellersAdmin" => count(Admin::where('type','Seller')->get()),
        "reviews" => count(Review::get()),
        "marketersAdmin" => count(Admin::where('type','Marketer')->get()),
        "stores"=>count(Store::get()),
        "faqs"=>count(Faq::get()),
        
    ];


    return $items[$model];
}




if (!function_exists('cart')) {

    function cart()
    {
        $cart=Cart::name('shopping')->useForCommercial();
        $tax = $cart->applyTax([
            'id'         => 123,
            'title'      => 'VAT 10%',
            'rate'       => settings()->taxes,
            'extra_info' => [
                'description'    => 'The V.A.T tax',
                'reference_link' => 'https://example.com'
            ]
        ]);
        return $cart;
    }
}
if (!function_exists('favourite')) {

    function favourite()
    {
        return cart()->newInstance('favourites')->useForCommercial(false);
    }
}

if (!function_exists('contacts')) {

    function contacts($type)
    {
        return isset($type) ?  Contact::where('type', $type)->get() : Contact::latest()->get();;
    }
}

if (!function_exists('isInCart()')) {

    function isInCart($id)
    {
        foreach(cart()->getItems() as $item)
        if($item->getId() == $id)
        return true;

        return false;
    }
}
if (!function_exists('getHash()')) {

    function getHash($id)
    {
        foreach(cart()->getItems() as $item)
        if($item->getId() == $id)
        return $item->getHash();
        return "";
    }
}
if (!function_exists('getQuantity()')) {

    function getQuantity($id)
    {
        foreach(cart()->getItems() as $item)
        if($item->getId() == $id)
        return $item->get('quantity');

        return 1;
    }
}
if (!function_exists('cartItem()')) {
    
    function cartItem($id)
    {
        return Product::findorfail($id);
    }
}

if (!function_exists('categories()')) {

    function categories()
    {
       return Category::get();
    }
}
if (!function_exists('advantages()')) {

    function advantages()
    {
       return Advantage::get();
    }
}

if (!function_exists('topSelling()')) {

    function topSelling()
    {
    
         $tops=DB::select('select count(product_id) as cnt, product_id from orderproducts group by product_id order by cnt desc');
         $items=[];
         foreach($tops as $key=>$value){
            if($key<10){
              array_push($items,$value->product_id);
            }
         }
      
        return $items;

    }   
}
if (!function_exists('rate()')) {

    // function rate($id)
    // {
    //    $product=Product::findorfail($id);
    //    $orderproducts=OrderProduct::get();
    //    return (count($product->orderProducts)!=0?count($product->orderProducts):1)/count($orderproducts)*5;
    // }
}



    // function orderproductStatus($count,$store_id,$product_id)
    // {
        
    //     try{
    //         $storeproduct=StoreProduct::where('store_id',$store_id)->where('product_id',$product_id)->first();
    //             // dd($storeproduct);
    //             if(isset($storeproduct)){
    //                 if($storeproduct->quantity >= $count){
    //                     $storeproduct->update(['quantity'=>$storeproduct->quantity-$count]);
    //                     return true;
    //                 }else
    //                 {
    //                     return false;
    //                 }
    //             }
    //             return false;

    //     } catch(Exception $e){
    //         dd($e);
    //     }

    // }

    // function orderStatus($order_id)
    // {
    //     try{
    //         $orderproducts=Orderproduct::where('order_id',$order_id)->get();
    //         $status='pending';
    //         foreach($orderproducts as $orderproduct)
    //         {
    //             if($orderproduct->status == 0)
    //             {
    //                 $status= 'missing';
    //                 break;
    //             }
    //         }
    //         return $status;

    //     }catch(Exception $e) {
    //         dd($e);
    //     }
       
    // }

    // function productstouck($product_id,$quantity)
    // {
    //     try{
            
    //         $product=Product::where('id',$product_id)->first();
    //         $storeproducts=StoreProduct::where('product_id',$product_id)->get();
    //         $count=$quantity;
    //         foreach($storeproducts as $storeproduct){
    //             $count +=$storeproduct->quantity;
    //         }
    //         if($product->stock >= $quantity && $product->stock >= $count)
    //         {
    //             return true;
    //         }
    //     }catch(Exception $e) {
    //         dd($e);
    //     }
           
    // }
