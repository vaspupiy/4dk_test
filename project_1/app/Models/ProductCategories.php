<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategories extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class, 'product_category_id');
    }
}
