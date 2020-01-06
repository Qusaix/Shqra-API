<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{

          /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['product_name','old_price','new_price','image'];


    public function product()
    {
        return $this->hasMany(Post::class);
    }
}
