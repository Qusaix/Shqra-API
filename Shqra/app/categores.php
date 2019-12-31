<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categores extends Model
{
    public function subcategores()
    {
        return $this->hasMany(Subcategores::class);
    }
}
