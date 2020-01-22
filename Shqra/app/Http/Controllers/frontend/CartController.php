<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
use App\Cart;
use App\Post;
use App\User;
use Auth;

class CartController extends Controller
{

    public function my_cart($id){
        $categores = Categores::get();
        
        return view('cart.index',compact('categores'));
    }

    public function add_product(Request $request)
    {
        $user = Auth::user();
        $product = Post::find(1); #$request->product_id);
        $cart = new Cart;
        $cart->quantity = "50";
        $cart->price = "60"; #$product->price;
        $cart->save();
       # return $product;
        $product->cart()->attach($cart);
        $user->cart()->associate($cart);
        
        // Get The Products inside the user Cart 
         #$user->cart->products;

         // Get All the Product Inside The Cart 
         $cart->products;

         // All The Carts The Product In
          $product->cart;
            
    

        return back();

    }
}
