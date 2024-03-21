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
        'alias'
    ];

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'subcategory_category');
    }

    public function getRouteKeyName()
    {
        return 'alias';
    }

}
