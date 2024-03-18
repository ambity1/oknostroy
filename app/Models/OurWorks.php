<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurWorks extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
    ];
}
