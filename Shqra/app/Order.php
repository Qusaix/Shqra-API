<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
          /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['Product_Name',];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsToMany(Post::class);
    }
 

}
