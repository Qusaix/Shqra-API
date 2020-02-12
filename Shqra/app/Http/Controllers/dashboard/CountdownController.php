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
        $countdowns = Countdown::paginate(10);

        return view('dashboard.countdown.index',compact('countdowns'));
    }

    public function create()
    {
        $products = Post::get();

        return view('dashboard.countdown.create',compact('products'));
    }


    public function edit($id)
    {
        $countdown = Countdown::find($id);
        $products = Post::get();

        return view('dashboard.countdown.edit',compact('countdown','products'));
    }

    public function update(Request $request , $id)
    {
        // Find The Countdown and The Product
        $countdown = Countdown::find($id);
        $product = Post::find($request->product);

        // Update The Values 
        $countdown->day = $request->day;
        $countdown->month = $request->month;
        $countdown->old_price = $product->price;
        $countdown->new_price = $request->new_price;
        
        // Product Values
        $product->price = $request->new_price;

        // Update The Realation
        $countdown->products()->associate($product);
        $countdown->save();
        $product->save();

        return redirect()->route('dashboard.countdown');
    }

    public function store(Request $request)
    {
        // Find The Product
        $product = Post::find($request->product);

        $countdown = new Countdown;
        $countdown->month = $request->month;
        $countdown->day = $request->day;

        $countdown->sold = "50";
        $countdown->available = "100";


        $countdown->old_price = $product->price;
        $countdown->new_price = $request->new_price;

        // Make Realtion 
        $countdown->products()->associate($product);
        $countdown->save();

        $product->price = $countdown->new_price;
        $product->save();
        


        return redirect()->route('dashboard.countdown');
    }


    public function delete($id)
    {
        $countdown = Countdown::find($id);
        $countdown->delete();

        return redirect()->route('dashboard.countdown');
    }
}
