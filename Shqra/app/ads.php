<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function user()
    {
        $this->hasOne(User::class);
    }
}
