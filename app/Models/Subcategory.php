<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'nameCatalog',
        'alias',
        'image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'subcategory_category');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'subcategory_products');
    }

    public function parents()
    {
        return $this->belongsToMany(Subcategory::class, 'subcategory_parent', 'subcategory_id', 'parent_id');
    }

    public function children()
    {
        return $this->belongsToMany(Subcategory::class, 'subcategory_parent', 'parent_id', 'subcategory_id');
    }
}
