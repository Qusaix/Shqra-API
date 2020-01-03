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

    public function sales()
    {
        return $this->belongsTo(Sales::class);
    }

    public function featured()
    {
        return $this->belongsTo(Featured::class);
    }
    
}
