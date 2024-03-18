<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'oldPrice',
        'price',
        'image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
}
