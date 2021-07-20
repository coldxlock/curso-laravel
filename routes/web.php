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

Route::get("/login", function(){
    return "Hey he";
})->name('url.name');

Route::get('/admin/dashboard', function(){
    return "Home admin";
})->middleware('auth');

Route::get('/admin/financeiro', function(){
    return "Financeiro Admin";
});

Route::get('/admin/produtos', function(){
    return "Produtos Admin";
});


Route::get('/', function () {
    return view('welcome');
});
