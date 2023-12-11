<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\FaqController;
use App\Http\Controllers\API\MessageController;
use App\Http\Controllers\API\CounterController;
use App\Http\Controllers\API\NewsletterController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\PageController;
use App\Http\Controllers\API\PortfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\TestimonialController;
use App\Http\Controllers\API\ProcessController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\SubcategoryController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('faqs', 'FaqController@index');
// Route::get('faqs/{id}', 'FaqController@show');
// Route::get('processes', 'ProcessController@index');
// Route::get('processes/{id}', 'ProcessController@show');
// Route::get('partners', 'PartnerController@index');
// Route::get('partners/{id}', 'PartnerController@show');
// Route::get('counters', 'CounterController@index');
// Route::get('counter/{id}', 'CounterController@show');
// Route::get('contacts', 'ContactController@index');
// Route::get('contact/{id}', 'ContactController@show');
// Route::get('settings', 'SettingController@index');
// Route::get('setting/{id}', 'SettingController@show');
// Route::get('portfolios', 'PortfolioController@index');
// Route::get('portfolio/{id}', 'PortfolioController@show');
// Route::get('pages', 'PageController@index');
// Route::get('page/{id}', 'PageController@show');
// Route::post('store/message', 'CMessageController@store');

// Route::post('store/newsletter', 'CNewsletterController@store');
Route::group(['middleware' => ['apiLocalization','cors']], function () {
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/service/{id}', [ServiceController::class, 'show']);
    Route::get('/testimonials', [TestimonialController::class, 'index']);
    Route::get('/testimonial/{id}', [TestimonialController::class, 'show']);
    Route::get('/processes', [ProcessController::class, 'index']);
    Route::get('/process/{id}', [ProcessController::class, 'show']);
    
    Route::get('/faqs', [FaqController::class, 'index']);
    Route::get('/faq/{id}', [FaqController::class, 'show']);
    
    Route::get('/partners', [PartnerController::class, 'index']);
    Route::get('/partner/{id}', [PartnerController::class, 'show']);
    Route::get('/teams', [TeamController::class, 'index']);
    Route::get('/team/{id}', [TeamController::class, 'show']);
    
    Route::get('/partners', [PartnerController::class, 'index']);
    Route::get('/partner/{id}', [PartnerController::class, 'show']);
    
    Route::get('/counters', [CounterController::class, 'index']);
    Route::get('/counter/{id}', [CounterController::class, 'show']);
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/contact/{id}', [ContactController::class, 'show']);
    
    Route::get('/settings', [SettingController::class, 'index']);
    
    Route::get('/pages', [PageController::class, 'index']);
    Route::get('/page/{id}', [PageController::class, 'show']);
    
    Route::get('/portfolios', [PortfolioController::class, 'index']);
    Route::get('/portfolio/{id}', [PortfolioController::class, 'show']);
    Route::get('/sliders', [SliderController::class, 'index']);
    Route::get('/slider/{id}', [SliderController::class, 'show']);
    
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::get('/subcategories', [SubcategoryController::class, 'index']);
    Route::get('/subcategory/{id}', [SubcategoryController::class, 'show']);

});

Route::post('/newsletter', [NewsletterController::class, 'store']);
Route::post('/message', [MessageController::class, 'store']);


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
    Route::post('/user/store', [UserController::class, 'store']);
});

