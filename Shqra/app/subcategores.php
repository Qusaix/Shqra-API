<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategores extends Model
{
    public function categore()
    {
        $this->hasOne(Categores::class);
    }

    public function post()
    {
        $this->hasMany(Post::class);
    }
}
