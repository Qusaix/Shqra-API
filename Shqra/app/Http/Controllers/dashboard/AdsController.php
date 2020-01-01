<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ads;

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

        return view('dashboard.ads.edit',compact('Ad'));
    }
    

    public function update(Request $request , $id )
    {
        $updateAd = Ads::find($id);

        $updateAd->title = $request->title;
        $updateAd->description = $request->description;
        $updateAd->price = $request->price;
        $updateAd->old_price = $request->old_price;
        $updateAd->image = "https://purepng.com/public/uploads/medium/purepng.com-apple-iphone-xappleapple-iphonephonesmartphonemobile-devicetouch-screeniphone-xiphone-10electronicsobjects-2515306897439urzk.png";

        $updateAd->save();

        return redirect()->route('dashboard.ads');
    }

    public function store(Request $request)
    {
        $newad = new Ads;

        $newad->title = $request->title;
        $newad->description = $request->description;
        $newad->price = $request->price;
        $newad->old_price = $request->old_price;
        $newad->image = "https://purepng.com/public/uploads/medium/purepng.com-apple-iphone-xappleapple-iphonephonesmartphonemobile-devicetouch-screeniphone-xiphone-10electronicsobjects-2515306897439urzk.png";

        $newad->save();

        return redirect()->route('dashboard.ads');
    }



}
 