<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{

    /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */
    protected $fillable = ['title','description','price','old_price','image'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->hasOne(Categores::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }



}
