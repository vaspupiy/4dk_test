<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {

    $Products = App\Models\Product::all();
    foreach($Products as $product){
        echo 'Товар: '.$product['name']. 'категории: '.($product->productCategory['name']).'<br>';
    }


    $productCategories = App\Models\ProductCategories::all();
    foreach($productCategories as $category){
        echo 'Категория: '.$category['name'].'<br>';
        echo '<b>товары категории: </b><br>';
        foreach ($category->products as $product){
            echo $product['name'].'<br>';
        }
        echo '<br>_________________________<br>';
    }
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

