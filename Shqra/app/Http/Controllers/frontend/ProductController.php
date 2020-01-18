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
        $rating = Rating::where('product_id',$product->id)->avg('rating');

        return view('products.index',compact('categores','product','product_categore','rating'));

    }
}
