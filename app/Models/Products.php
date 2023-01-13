<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    //relation to set many categories for a product (Should Create table category_product(id,id_product,id_category) in MySQL)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'id_product', 'id_category');
    }
}