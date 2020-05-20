<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    // sets the specified table fields to be able to be filled
    protected $fillable = [
        'title',
        'description',
    ];
}
