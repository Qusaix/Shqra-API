<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategores extends Model
{
    public function categore()
    {
        return $this->belongsTo(Categores::class);
    }

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
