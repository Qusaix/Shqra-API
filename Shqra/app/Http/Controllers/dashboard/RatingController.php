<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;
use App\User;
use App\Post; 
Use Alert;


class RatingController extends Controller
{
    public function store(Request $request)
    {
        $product = Post::find($request->product_id);
        
        if(!auth()->user())
        {
            return response()->jsone(['error'=>'You Need To Login To Add a Review (Just For Testing purposes )']);
        }

        // Check if the user already have a review 
        if(auth()->user()->check_review($product->id) != "0")
        {

            return response()->json(['error'=>"You Allready Have Added A Review"],401);
        }

        $rate = new Rating;
        $user = User::find(auth()->user()->id);
        $rate->msg = "Yo This is Amazing";
        $rate->product_id = $product->id;
        $rate->rating = $request->rating;
        $rate->save();

        // Make Relations
        $rate->product()->associate($product);
        $rate->users()->associate($user);
        $rate->save();


        return response()->json(['success'=>$product->rating()],201);




        $input = $request->all();

        return response()->json(['success'=>$request->rating],201);


    }
}
