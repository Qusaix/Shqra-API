<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Post::paginate(10);

        return view('dashboard.products.index',compact('products'));
    }
}
