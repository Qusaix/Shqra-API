<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function user()
    {
        $this->hasOne(User::class);
    }

    public function category()
    {
        $this->hasOne(Categores::class);
    }

    public function post()
    {
        $this->hasOne(Post::class);
    }



}
