<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories ()
    {
        return $this->belongsToMany(Category::class, 'category_and_products', 'product_id', 'category_id');
    }
}
