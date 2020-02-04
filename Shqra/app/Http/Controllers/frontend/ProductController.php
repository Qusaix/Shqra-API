<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Post;
use App\Categores;
use App\Rating;

class ProductController extends Controller
{
    public function index($id)
    {
        $categores = Categores::get();

        $product_categore = Post::my_categore($id)->first();
        $product = Post::find($id);
        $rating = $product->rating->avg('rating');
        $true = "0";
       # return $product;

        if(auth()->user())
        {
            $true =  auth()->user()->check_review($product->id);
        }
       
       

        return view('products.index',compact('categores','product','product_categore','rating','true'));

    }
}
