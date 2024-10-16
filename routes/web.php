<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('routes', function () {
    $pattern = '~(?:(\()|(\[)|(\{))(?(1)(?>[^()]++|(?R))*\))(?(2)(?>[^][]++|(?R))*\])(?(3)(?>[^{}]++|(?R))*\})~'; 
    $routeCollection = Route::getRoutes();
    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        if($value->methods()[0]=='GET'){
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" ."<a class='d-block' href='" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."' target='__blank'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."</a>" . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    }
    foreach ($routeCollection as $value) {
        if($value->methods()[0]!=='GET'){
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" ."<p class='d-block'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."</p>" . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
});


Route::group(
[
'prefix' => LaravelLocalization::setLocale(),
'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
],
function () {

// Route::get('/mail', function () {
// return view('mail.admin_verify');
// })->name('dashboard');

Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class,
'create'])->name('user.register-view');
Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('user.register');
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class,
'create'])->name('user.login-view');
Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])->name('user.login');
Route::get('/forget', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'forget'])->name('user.forget');

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/shopping', [ShoppingController::class, 'index'])->name('front.shopping_now');
Route::get('/faq-page', 'App/Http/Controllers/FaqController@index')->name('front.faq');
Route::get('/message', [MessageController::class,'index'])->name('front.message');
Route::get('/newsletter', [NewsletterController::class,'index'])->name('front.newsletter');
Route::get('/service', [ServiceController::class,'index'])->name('front.service');
Route::get('/single-service/{id}', [ServiceController::class,'show'])->name('front.show.service');
Route::get('/testimonial', 'App/Http/Controllers/TestimonialController@index')->name('front.testimonial');
Route::get('/single-testimonial', 'App/Http/Controllers/TestimonialController@show')->name('front.show.testimonial');
Route::get('/single-faq', 'App/Http/Controllers/FaqController@show')->name('front.show.faq');
Route::get('/portfolio', 'App/Http/Controllers/PortfolioController@index')->name('front.portfolio');


Route::get('/orderproduct', 'App/Http/Controllers/OrderProductController@index')->name('front.orderproduct');
Route::get('/product/{id}', [ProductController::class,'index'])->name('front.products');
Route::get('/product/{id}/show', [ProductController::class,'show'])->name('front.show.product');
Route::get('/about', [AboutController::class,'index'])->name('front.about');
Route::post('/message', [MessageController::class,'store'])->name('front.message.post');

Route::get('/single-portfolio/{id}', [ServiceController::class,'showportfolio'])->name('front.show.portfolio');
// Route::post('/newsletter', 'App/Http/Controllers/NewsletterController@store')->name('front.newsletter.post');
Route::post('/newsletter', [NewsletterController::class,'store'])->name('front.newsletter.post');


Route::group(['middleware' => ['auth:web']], function () {

Route::get('/addToCart/{id}', [CartController::class,'addToCart'])->name('addTo.cart');
Route::get('/removeFromCart/{hash}', [CartController::class,'removeItemCart'])->name('removeFrom.cart');
Route::get('/updateItemCount/{hash}/{quantity}', [CartController::class,'updateItemCount'])->name('updateItem.count');
Route::get('/add_to_cart',[HomeController::class,'showaddtocart'])->name('front.shopping');


Route::get('/cart', [CartController::class,'getCartItems'])->name('front.shopping');
Route::get('/profile',[ProfileController::class,'show'])->name('show_profile');
Route::post('/update_profile/{id}',[ProfileController::class,'update'])->name('update_profile');

});
Route::get('/team',[HomeController::class,'showteam'])->name('front.team');
Route::get('/testimonial',[HomeController::class,'showtestimonial'])->name('front.testimonial');
Route::get('/wishlit',[HomeController::class,'showwishlist'])->name('front.wishlist');


}
);
