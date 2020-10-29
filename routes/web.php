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
    return view('frontend.pages.myapp.index');
})->name('home');

Route::get('profile/', function () {
    return view('frontend.pages.profile.index');
})->name('profile');

Route::get('product/', function () {
    return view('frontend.pages.product.index');
})->name('product');

//product-category-women;
Route::get('product/product-category/woman', function () {
    return view('frontend.pages.product.productcategory.women.index');
})->name('product-category-women');

Route::get('product/product-category/man', function () {
    return view('frontend.pages.product.productcategory.men.index');
})->name('product-category-man');

Route::get('contacts/', function () {
    return view('frontend.pages.contact.index');
})->name('contact');