<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;
use App\Ads;
use App\Post;
use RealRashid\SweetAlert\Facades\Alert;

class AdsController extends Controller
{
    public function index()
    {
        $Ad = Ads::find(1);



        return view('dashboard.ads.index',compact('Ad'));
    }

    public function create()
    {
        return view('dashboard.ads.create');
    }

  public function edit($id)
    {
        $Ad = Ads::find($id);
        $products = Post::get();
        return view('dashboard.ads.edit',compact('Ad','products'));
    }
    

    public function update(PostRequest $request , $id )
    {
        $updateAd = Ads::find($id);
        $product = Post::find($request->id);

        $updateAd->title = $request->title;
        $updateAd->description = $request->description;
        $updateAd->price = $request->price;
        $updateAd->old_price = $request->old_price;
        $updateAd->image =  Storage::disk('public')->put('Adsimags', $request->image);

        $updateAd->product()->associate($product); 
        $updateAd->save();

        Alert::toast('Ad Was Updated', 'success');

        return redirect()->route('dashboard.ads');
    }

    public function store(PostRequest $request)
    {
        $newad = new Ads;
        Storage::disk()->put('Adsimags', $request->image);
        $newad->title = $request->title;
        $newad->description = $request->description;
        $newad->price = $request->price;
        $newad->old_price = $request->old_price;
        $newad->image = Storage::get($request->image);
        
        $newad->save();
        
        Alert::toast('Ad Was Created', 'success');


        return redirect()->route('dashboard.ads');
    }



}
 