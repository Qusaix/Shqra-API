<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Categores;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // The Search functionality 
        $products = Post::where('Title' , 'Like' ,'%'.$request->search.'%')
        ->paginate(10);

        $categores  = Categores::get();


        return view('categoers.index',compact('products','categores'));
    }
}
