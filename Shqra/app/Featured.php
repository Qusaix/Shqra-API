<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    public function product()
    {
        return $this->belongsToMany(Post::class);
    }
}
