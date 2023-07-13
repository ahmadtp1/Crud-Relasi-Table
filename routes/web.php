<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pembelicontroller;

use App\Http\Controllers\produkcontroller;
Route::get('/', function () {
    return view('welcome');
});

route::resource('pembeli', pembelicontroller::class);
route::resource('produk', produkcontroller::class);