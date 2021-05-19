<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategories;

class Product extends Model
{
    use HasFactory;

    public function productCategory(){
        return $this->belongsTo(ProductCategories::class);
    }
}
