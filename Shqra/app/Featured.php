<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Featured extends Model
{
    use SoftDeletes;

       /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['product_name','deleted_at','price','old_price','image','featured'];

    public function product()
    {
        return $this->belongsToMany(Post::class);
    }
}
