<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Categores;
use App\Cart;
use App\Post;
use App\User;
use Auth;


class CartController extends Controller
{

    public function my_cart(){

        $categores = Categores::get();
        $user = User::find(Auth::user()->id);
        $product = Post::find(1); #$request->product_id);
        $prdoucts_inside_cart = $user->cart->products;

        

        
        return view('cart.index',compact('categores','prdoucts_inside_cart'));
    }

    public function add_product(Request $request , $id )
    {

        $user = User::find(Auth::user()->id); 
        $product = Post::find($id);
        // Create New Cart if User Don't Have 
        if(!$user->cart){

            $cart = new Cart;
            $cart->quantity = "50";
            $cart->price = "60";
            $cart->save();

       // Make Relations 
        $product->cart()->attach($cart);
        $user->cart()->associate($cart); 
        $user->save(); 

       
        return back();

    
        }else{
            $cart = Cart::find($user->cart->id);
            // If The User Already Have Cart     
            $product->cart()->attach($cart);
            return back();

            
        }
       
       
      

        
        // Get The Products inside the user Cart 
        # return $user->cart->products;

         // Get All the Product Inside The Cart 
         $cart->products;

         // All The Carts The Product In
          $product->cart;
            
    

        return back();

    }



    public function check_out()
    {
        Alert::toast('Thank You For Trying This Version if You Want To Buy it or make an website just contact Me on this email: qusaiznemat6@gmail.com , Thank You for Trying','success');

        
        return back();
    }



}
