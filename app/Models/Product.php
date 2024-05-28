<?php

namespace App\Models;

class Product extends RModel
{
    protected $table = 'products';
    protected $fillable = ['name', 'value', 'image', 'description', 'category_id'];
}
