<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // protected $table = "linkes";
    protected $fillable = [
        'type',
        'data'
    ];
}
