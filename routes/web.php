<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\VariantController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// Route::get('/', function () {
//     return view('welcome');
// });


/*
routy pre podstránky sekcii (lopty, chranice, rozhodca, ofiko dresy, kopacky.......)
*/

Route::get('/', [FrontendCategoryController::class, 'index']); // Toto je domovska stránka

Route::get('/category/{name}', 'App\Http\Controllers\frontend\CategoryController@show')->name('category.show');
// Route::get('/category/{name}/filter', 'App\Http\Controllers\frontend\VariantController@filter')->name('variants.filter');

Route::get('/variant/{id}', 'App\Http\Controllers\frontend\VariantController@show')->name('variantDetail');





// Route::get('/lopty', function () {
//     return view('pages.lopty'); //  blade sablona v priecinku resources-views-pages
// });

/*
koniec rout pre  podstránky sekcii (lopty, chranice, rozhodca, ofiko dresy, kopacky.......)
*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/admin/categories', [CategoryController::class, 'index']);


// });
