<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
use App\Post;

class CategoresController extends Controller
{
    public function index($id=null)
    {
        $categores  = Categores::get();

        if($id){
            $categore = Categores::find($id);
            $products =  $categore->product;
            $all_products_one =$products->count();

            return view('categoers.index',compact('categores','products','id','all_products_one'));

            
        }else{
            $products = Post::paginate(20); 

        }

        // return $products;


        return view('categoers.index',compact('categores','products','id'));
    }
}
