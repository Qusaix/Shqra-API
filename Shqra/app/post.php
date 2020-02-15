<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Categores;

class Post extends Model
{

         /*
    *
    *
    *
    The attributes that are mass assignable.
    * @var array
    */ 
    
    protected $fillable = ['Title','description','price','image','categores_id'];


    public function categore()
    {
        return $this->belongsTo(Categores::class , 'categores_id');
    }

    public static function my_categore($id)
    {   
        // Find Product
        $product  = Post::find($id);

        // Find categore and return it
        return Categores::where('id',$product->categores_id);
        
    }

    public function order()
    {
        return $this->hasMany(User::class);
    }

    public function sales()
    {
        return $this->belongsTo(Sales::class);
    }

    public function featured()
    {
        return $this->belongsTo(Featured::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class,'product_id');
    }

    public function countdown()
    {
        return $this->hasOne(Countdown::class,'product_id');
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function ads()
    {
        return $this->hasOne(ads::class,'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
