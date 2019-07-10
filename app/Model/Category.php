<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    function getRouteKeyName()
    {
        return 'slug';
    }
}
