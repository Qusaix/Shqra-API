<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
use App\Post;

class CategoresController extends Controller
{
    public function index()
    {
        $categores  = Categores::get();
        $products = Post::paginate(20);
        // return $products;


        return view('categoers.index',compact('categores','products'));
    }
}
