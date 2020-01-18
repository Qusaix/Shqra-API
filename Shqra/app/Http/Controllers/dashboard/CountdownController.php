<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Countdown;
use App\Post;

class CountdownController extends Controller
{
    public function index()
    {
        $countdown = Countdown::find(1);

        return view('dashboard.countdown.index',compact('countdown'));
    }

    public function create()
    {
        return view('dashboard.countdown.create');
    }
    

    public function store(Request $request)
    {
        $product = Post::find(1);

        $countdown = new Countdown;
        $countdown->month = "January"; #$request->month;
        $countdown->day = "13";#$request->day;
        $countdown->sold = "50";
        $countdown->old_price = "14";#$product->price;
        $countdown->new_price = "500";
        $countdown->available = "100";
        $countdown->product_id = $product->id;
        $countdown->save();
        $product->price = $countdown->new_price;
        $product->save();
        $countdown->products()->associate($product);

        return $countdown->products->Title;

        return "Will Down";
    }
}
