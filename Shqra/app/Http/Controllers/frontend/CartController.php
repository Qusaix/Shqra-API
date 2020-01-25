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

    public function my_cart()
    {
        // Get All Categores For The Nav
        $categores = Categores::get();

        // Find The User Login User
        $user = User::find(Auth::user()->id);

        // To Get All The Product Inside The The User Cart 
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
            foreach($user->cart->products as $product_P){
                
                if($product->id == $product_P->id){
                    
                    Alert::toast('The Product Already in Your Cart','scuess');
                    return back();
                }
            }
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

    public function remove_product( $cart_id , $product_id = null )
    {
        #return $cart_id;
        // Find The User Login User
        $user = User::find(Auth::user()->id);
        foreach($user->cart->products as $product){

            if($product_id == $product->id){

                $product->cart()->detach();
            }


        }
        return back();

        
    }



    public function check_out()
    {
        Alert::toast('Thank You For Trying This Version if You Want To Buy it or make an website just contact Me on this email: qusaiznemat6@gmail.com , Thank You for Trying','success');

        
        return back();
    }



}
