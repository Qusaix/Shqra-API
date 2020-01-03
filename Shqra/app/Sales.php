<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function product()
    {
        return $this->hasMany(Post::class);
    }
}
