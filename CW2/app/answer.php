<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    // sets the specified table fields to be able to be filled
    protected $fillable = [
        'text',
    ];
}
