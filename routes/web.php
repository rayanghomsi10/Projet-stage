<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

/*Route::get('/n', function () {
    return view('site.accueil');
});
Route::get('/shop.blade.php', function (){
    return view('site.shop');
});

Route::get('/shop.blade.php', [\App\Http\Controllers\ProductController::class, 'index']);*/

Route::get('/', 'ProductController@index')->name('index');

Route::get('/create', 'ProductController@create')->name('create');

Route::post('store/', 'ProductController@store')->name('store');

//Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
