<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProduct;
use App\Traits\Things;
use App\Post;
use App\Categores;
use URL;

class ProductsController extends Controller
{
    use Things;

    public function index()
    {
        $user = auth()->user();
        $products = Post::paginate(10);

        if($user->hasRole('company'))
        {
           $products = $user->product()->paginate(10);

       
        }


        return view('dashboard.products.index',compact('products'));
    }

    public function create()
    {
        $categores = Categores::get();

        return view('dashboard.products.create',compact('categores'));
    }

    public function store(StoreProduct $request)
    {
       # return $request;
       // Find The Categore
        $categores= Categores::find($request->categore);

        // Check if There is an Image In the request
        if(!$request->image)
        {
            return back()->withErrors(['You Need To Add A photo']);
        }

        //Create Product
        $product = new Post;
        $product->Title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $this->uploadImage('product_images',$request->file('image'));
        $product->categore()->associate($categores);
        $product->user()->associate(auth()->user());
        $product->save();

        return redirect()->route('dashbaord.product');  

    }


    public function edit($id)
    {   
        $categores = Categores::get();
        $product = Post::find($id);

        return view('dashboard.products.edit',compact('categores','product'));
    }

    public function update($id ,StoreProduct $request)
    {
        // Find The Product and The Categore
        $product = Post::find($id);
        $categore = Categores::find($request->categore);

        // Update The Values 
        $product->Title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        if($request->image)
        {
            $product->image = $this->uploadImage('product_images',$request->file('image'));

        }
        $product->categore()->associate($categore);
        $product->save();

        return redirect()->route('dashbaord.product');

    }


    
}
