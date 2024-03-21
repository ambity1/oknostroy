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

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'subcategory_products');
    }
}
