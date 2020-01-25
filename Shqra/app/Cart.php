<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

   /*
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 

    protected $filable = ['quantity','price'];


    public function products()
    {
        return $this->belongsToMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
