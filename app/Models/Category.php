<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products ()
    {
        return $this->belongsToMany(Product::class, 'category_and_products', 'category_id', 'products_id');
    }
}
