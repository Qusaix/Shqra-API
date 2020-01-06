<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

         /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['Title','description','price','image'];


    public function subcategore()
    {
        return $this->belongsTo(Subcategores::class);
    }

    public function order()
    {
        return $this->belongsTo(User::class);
    }

    public function sales()
    {
        return $this->belongsTo(Sales::class);
    }

    public function featured()
    {
        return $this->belongsTo(Featured::class);
    }

    public function rating()
    {
        return $this->belongsToMany(Rating::class);
    }
    
}
