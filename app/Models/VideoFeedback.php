<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoFeedback extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'nameClient',
        'addressClient',
        'linkOnVideo',
    ];
}
