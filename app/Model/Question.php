<?php

namespace App\Model;

use App\User;
use App\Model\Reply;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $guarded = [];

    function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function replies()
    {
        return $this->hasMany(Reply::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function getPathAttribute()
    {
        return asset("api/questions/$this->slug");
    }
}
