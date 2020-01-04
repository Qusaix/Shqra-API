<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Featured extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsToMany(Post::class);
    }
}
