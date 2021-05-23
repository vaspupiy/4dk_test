<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Route::get('/products', 'ProductsController@allData')->name('products');

Route::get('/products/{id}', 'ProductsController@categoryProducts')->name('category-products');

Route::get('/products/{id_category}/{id_product}', 'ProductsController@product')->name('product');