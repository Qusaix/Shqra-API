<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sales;
use App\Featured;
use App\Post;
use App\Http\Requests\Featured\StoreRequest;
class FeaturedController extends Controller
{
    public function index()
    {
        $featured = Featured::get();


        return view('dashboard.featured.index', compact('featured'));
    }


    public function create()
    {
        $products = Post::get();
        return view('dashboard.featured.create',compact('products'));
    }

    public function store(Request $request)
    {

        $product = Post::find($request->product);
        $featured = new Featured;
        $featured->product_name = $product->Title;
        $featured->new_price = $request->new_price;
        $featured->old_price = $product->price;
        $featured->image = $product->image;
        $featured->save();
        $product->featured()->associate($featured);

        return redirect()->route('dashboard.featured');





    }


    public function edit($id)
    {
        $featured = Featured::find($id);

        return view('dashboard.featured.edit',compact('featured'));
    }

    public function update(StoreRequest $request,$id)
    {
        $featured = Featured::find($id);

        $featured->product_name = $request->product_name;
        $featured->new_price = $request->new_price;
        $featured->old_price = $request->old_price;
        $featured->image = "link";
        $featured->save();

        return redirect()->route('dashboard.featured');
    }

    
}
