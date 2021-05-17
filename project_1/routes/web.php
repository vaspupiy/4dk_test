<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $productCategories = App\Models\ProductCategories::all();
    foreach($productCategories as $category){
        echo 'Категория: '.$category['name'].'<br>';
        echo 'товары категории: <br>';
        foreach ($category->products as $product){
            echo $product['name'].',';
        }
        echo '<br>_________________________'.'<br>';
    }
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

