<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategores extends Model
{
          /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['Title','description'];

    public function categore()
    {
        return $this->belongsTo(Categores::class);
    }

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
