<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\NewsletterController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('user.register-view');
        Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('user.register'); 
        Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('user.login-view');
        Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])->name('user.login'); 

        Route::get('/', [HomeController::class, 'index'])->name('front.home');
        Route::get('/faq-page', 'App/Http/Controllers/FaqController@index')->name('front.faq');
        Route::get('/message', [MessageController::class,'index'])->name('front.message');
        Route::get('/newsletter', [NewsletterController::class,'index'])->name('front.newsletter');
        Route::get('/service', [ServiceController::class,'index'])->name('front.service');
        Route::get('/single-service/{id}', [ServiceController::class,'show'])->name('front.show.service');
        Route::get('/testimonial', 'App/Http/Controllers/TestimonialController@index')->name('front.testimonial');
        Route::get('/single-testimonial', 'App/Http/Controllers/TestimonialController@show')->name('front.show.testimonial');
        Route::get('/single-faq', 'App/Http/Controllers/FaqController@show')->name('front.show.faq');
        Route::get('/portfolio', 'App/Http/Controllers/PortfolioController@index')->name('front.portfolio');
        Route::get('/orderproduct', 'App/Http/Controllers/OrderproductController@index')->name('front.orderproduct');
        Route::get('/product/{id}', [ProductController::class,'index'])->name('front.products');
        Route::get('/product/{id}/show', [ProductController::class,'show'])->name('front.show.product');
        Route::get('/about', [AboutController::class,'index'])->name('front.about');
        Route::post('/message', [MessageController::class,'store'])->name('front.message.post');
        Route::post('/order', [OrderController::class,'store'])->name('front.order.post');

        Route::get('/single-portfolio/{id}', [ServiceController::class,'showportfolio'])->name('front.show.portfolio');
        // Route::post('/newsletter', 'App/Http/Controllers/NewsletterController@store')->name('front.newsletter.post');
        Route::post('/newsletter', [NewsletterController::class,'store'])->name('front.newsletter.post');


        Route::group(['middleware' => ['auth:web']], function () {
            
        Route::get('/addToCart/{id}', [CartController::class,'addToCart'])->name('addTo.cart');
        Route::get('/removeFromCart/{hash}', [CartController::class,'removeItemCart'])->name('removeFrom.cart');
        Route::get('/updateItemCount/{hash}/{quantity}', [CartController::class,'updateItemCount'])->name('updateItem.count');
        
        Route::get('/add_to_cart', function () {
            
            return view("front.shopping");
        })->name('front.shopping');
        Route::get('/cart', [CartController::class,'getCartItems'])->name('front.shopping');
        Route::post('/update_profile/{id}',[ProfileController::class,'update'])->name('update_profile');
    });


    }
);
