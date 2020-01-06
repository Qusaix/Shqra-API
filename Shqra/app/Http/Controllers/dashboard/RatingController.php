<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;
use App\User;
use App\Post;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $rate = new Rating;
        $product = Post::find(1);
        $user = User::find(1);
        $rate->msg = "Yo This is Amazing";
        $rate->product_id = $product->id;
        $rate->user_id = $user->id;
        $rate->rating = $request->rating;
        $rate->save();
        $rate->product()->associate($product);
        $rate->users()->associate($user);

        return response()->json(['success'=>$product->rating()],201);




        $input = $request->all();

        return response()->json(['success'=>$request->rating],201);


    }
}
