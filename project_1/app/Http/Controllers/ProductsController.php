<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;
use App\Models\Product;


class ProductsController extends Controller
{
    public function allData()
    {
        $productCategories = new ProductCategories;
        $products = new Product;
        return view(
            'products',
            [
                'categories' => $productCategories->all(),
                'selectProducts' => $products->inRandomOrder()->take(3)->paginate(3),
                'title' => 'Страница продукты',
                'is_product' => false,
            ]
        );
    }

    public function categoryProducts($id)
    {
        $productCategories = new ProductCategories;
        $products = new Product;
        if ($id == 0) {
            $selectProducts = $products;
            $title = 'Товары всех категорий ';
        } else {
            $selectProducts = $products::where('product_category_id', $id);
            $category = $productCategories->find($id);
            $title = 'Товары категории: ' . $category['name'];
        }
        return view(
            'products',
            [
                'categories' => $productCategories::all(),
                'selectProducts' => $selectProducts->paginate(3),
                'title' => $title,
                'is_product' => false,
            ]
        );
    }

    public function product($id_category, $id_product)
    {
        $productCategories = new ProductCategories;
        $products = new Product;
        $product = $products->find($id_product);
        $imagePath = "images/" . $product['image'] . '.png';
        return view(
            'products',
            [
                'categories' => $productCategories::all(),
                'product' => $product,
                'title' => $product['name'],
                'is_product' => true,
                'imagePath' => $imagePath,
            ]
        );
    }
}