<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categores extends Model
{
     /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */
    protected $fillable = ['Title','description'];

    public function subcategores()
    {
        return $this->hasMany(Subcategores::class);
    }
}
