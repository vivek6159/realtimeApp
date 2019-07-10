<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    function question()
    {
        return $this->belongsTo(Question::class);
    }

    function user()
    {
        $this->belongsTo(User::class);
    }

    function likes()
    {
        return $this->hasMany(Like::class);
    }
}
