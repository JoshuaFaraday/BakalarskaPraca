<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
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

Route::get('/', [CategoryController::class, 'index']); // Toto je predpokladaná domovská stránka, môžete ju prispôsobiť podľa vašich potrieb

Route::get('/category/{name}', 'App\Http\Controllers\backend\CategoryController@show')->name('category.show');


Route::get('/lopty', function () {
    return view('pages.lopty'); //  blade sablona v priecinku resources-views-pages
});

Route::get('/chranice', function() {
    return view('pages.chranice');
});

Route::get('/treningove-doplnky', function() {
    return view('pages.treningove-doplnky');
});

Route::get('/brankarske-vybavenie', function() {
    return view('pages.brankarske-vybavenie');
});

Route::get('/oficialne-dresy', function() {
    return view('pages.oficialne-dresy');
});
Route::get('/rozhodca', function() {
    return view('pages.rozhodca');
});
Route::get('/oblecenie', function() {
    return view('pages.oblecenie');
});
// Route::get('/kopacky', function() {
//     return view('pages.kopacky');
// });
Route::get('/kopacky', [ProductController::class, 'showKopacky'])->name('kopacky.show');
Route::get('/zdravotne-doplnky', function() {
    return view('pages.zdravotne-doplnky');
});
/*
koniec rout pre  podstránky sekcii (lopty, chranice, rozhodca, ofiko dresy, kopacky.......)
*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
