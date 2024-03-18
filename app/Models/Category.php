<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'catalogName',
//        'product_id',
//        'parent_id'
    'alias'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products');
    }

    public function parents()
    {
        return $this->belongsToMany(Category::class, 'category_parent', 'category_id', 'parent_id');
    }

    public function children()
    {
        return $this->belongsToMany(Category::class, 'category_parent', 'parent_id', 'category_id');
    }

    public function getRouteKeyName()
    {
        return 'alias';
    }

}
