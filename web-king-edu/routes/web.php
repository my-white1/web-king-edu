<?php

use App\Http\Controllers\PostController;
use App\Models\PostModel;
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
    return view('frontend.index');
});


Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/adminn', function () {
    return view('admin.index');
});

Route::get('/adminn/products', function () {
    return view('admin.products');
});

Route::get('/adminn/login', function () {
    return view('admin.login');
});

Route::get('/adminn/accounts', function () {
    return view('admin.accounts');
});

Route::get('/adminn/edit-product', function () {
    return view('admin.edit-product');
});

Route::resource('/adminn/add_product' , PostController::class );