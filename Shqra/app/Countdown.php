<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Countdown extends Model
{
         /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
        use SoftDeletes;
        
    protected $fillable = ['day','month','sold','available','old_price','new_price',];


    public function products()
    {
        return $this->belongsTo(Post::class,'product_id');
    }
}
