<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function subcategore()
    {
        return $this->belongsTo(Subcategores::class);
    }

    public function order()
    {
        return $this->belongsTo(User::class);
    }
    
}
