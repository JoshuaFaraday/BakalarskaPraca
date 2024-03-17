<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariantController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontendCategoryController::class, 'index']); // Toto je domovska stránka

Route::get('/category/{name}', 'App\Http\Controllers\frontend\CategoryController@show')->name('category.show');

Route::get('/category/special/{specialCategory}', 'App\Http\Controllers\frontend\CategoryController@showSpecial')->name('category.showSpecial');

Route::get('/variant/{id}', 'App\Http\Controllers\frontend\VariantController@show')->name('variantDetail');

//routa pre košík
Route::get('/cart', 'App\Http\Controllers\CartController@show')->name('cart.show');


//routa na pridanie do košika
Route::post('/cart/add', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');

Route::post('/checkout/process', 'App\Http\Controllers\CheckoutController@process')->name('checkout.process');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/admin/categories', [CategoryController::class, 'index']);


// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
