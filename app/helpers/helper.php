<?php

use App\Models\Admin;
use App\Models\Advantage;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Counter;
use App\Models\Newsletter;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Order;
use App\Models\Page;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Orderproduct;
use App\Models\Seller;
use App\Models\Store;
use App\Models\StoreProduct;
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
        "testimonials" => count(Testimonial::get()),
        "partners" => count(Partner::get()),
        "sliders" => count(Slider::get()),
        "users" => count(User::get()),
        "admins" => count(Admin::get()),
        "orderproducts" => count(Orderproduct::get()),
        "roles" => count(Role::get()),
        "orders" => count(Order::get()),
        "advertisements" => count(Advertisement::get()),
        "advantages" => count(Advantage::get()),
        "companies" => count(Company::get()),
        "sellers" => count(Seller::get()),
        "stores" => count(Store::get()),
        "storeProducts" => count(StoreProduct::get()),
    ];


    return $items[$model];
}




if (!function_exists('cart')) {

    function cart()
    {

        return Cart::name('shopping')->useForCommercial();
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


