<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->hasOne(Categores::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }



}
