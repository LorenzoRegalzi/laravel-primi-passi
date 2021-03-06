<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');



Route::get('/prodotti/{id}', function ($id) {
    return view('prodotto' , compact('id'));
})->name('prodotti.show');

// Route::get(url: '/prodotti', action: 'ProductController@index')->name(name:'prodotti');
//
// Route::get(url: '/prodotti/{id}', action: 'ProductController@show')->name(name:'prodotti.show');



Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

//admin
Route::get('/admin', function () {
    return view('admin.products');
})->name('admin');



// Route::get('/index', function () {
//     return view('index');
// })->name('index');
