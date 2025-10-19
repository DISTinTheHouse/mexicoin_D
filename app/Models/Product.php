<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'stock',
        'image',
        'created_at',
        'updated_at',
        'multiplier',
        'discount',
        'is_active',
        'is_featured',
        'coin_base',
        'coin_base_type',
    ];
}
