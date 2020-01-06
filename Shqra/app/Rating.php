<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    /*
    *
    *
    * @var @array
    * To Protuct The Model
    */
    protected $fillable = ['rating','msg'];

    public function product()
    {
        return $this->belongsTo(Post::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
