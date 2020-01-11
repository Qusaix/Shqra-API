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
        $featured = Featured::get()->take(6)->sortByDesc('created_at');
        

        return view('dashboard.featured.index', compact('featured'));
    }


    public function create()
    {
        $products = Post::get();
        return view('dashboard.featured.create',compact('products'));
    }

    public function store(Request $request)
    {
        #return $request->featured;

        $product = Post::find($request->product);
        $featured = new Featured;
        $featured->product_name = $product->Title;
        $featured->new_price = $request->new_price;
        $featured->old_price = $product->price;
        $featured->image = $product->image;

        if($request->featured)
        {
            $featured->featured = "1";
        }
        else
        {
            $featured->featured = "0";
        }

        $featured->save();
        $product->featured()->associate($featured);

        return redirect()->route('dashboard.featured');





    }


    public function edit($id)
    {
        $featured = Featured::find($id);
        $products = Post::get();



        return view('dashboard.featured.edit',compact('featured','products'));
    }

    public function update(Request $request,$id)
    {
        $featured = Featured::find($id);
        // $product = Post::find($request->product);


        // $featured->product_name = $product->Title;
        $featured->new_price = $request->new_price;
        // $featured->old_price = $product->price;
        // $featured->image = $product->image;
        if($request->featured)
        {
            $featured->featured = "1";
        }
        // elseif($featured->featured == '1')
        // {
        //     $featured->featured = "1";
        // }
        else
        {
            $featured->featured = "0";
        }
        $featured->save();

        return redirect()->route('dashboard.featured');
    }

    public function delete($id)
    {
        $featured = Featured::find($id);
        $featured->delete();

        return back();
    }

    
}
