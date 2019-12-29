<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Post;

class OrderController extends Controller
{
    
    public function one_order($id)
    {
        return response()->json([
            'order'=>Order::find($id),
            'msg'=>'One Order You Requested'
        ],200);
    }


    public function all_orders()
    {
        return response()->json([
            'orders'=>Order::get(),
            'msg'=>'All Orders inside the database'
        ],200);
    } 

    public function store(Request $request)
    {
        $product = Post::find($request->product);
        $user = User::find($request->user);
       
        $newOrder = new Order;
        $newOrder->Product_Name = $product->Title;
        $newOrder->User_Name = $user->name;
        $newOrder->Categorey_Name = "Name";
        $newOrder->save();
        $newOrder->product()->associate($product);
        $newOrder->user()->associate($user);

        return response()->json([
            'success'=>'New Order Was Made',
        ],201);


    }
}
