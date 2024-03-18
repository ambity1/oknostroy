<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandUses extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
    ];
}
