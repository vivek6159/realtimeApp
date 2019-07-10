<?php

namespace App\Model;

use App\User;
use App\Model\Like;
use App\Model\Question;
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
        return $this->belongsTo(User::class);
    }

    function likes()
    {
        return $this->hasMany(Like::class);
    }
}
