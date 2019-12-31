<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categores;
use App\Post;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function create_ad(Request $request)
    {
        $categore = Categores::find($request->categore);
        $post = Post::find($request->post);

        $newAd = new ads;
        $newAd->Title = $request->Title;
        $newAd->description = $request->description;
        $newAd->image = $request->image;
        $newAd->save();
        $newAd->category()->associate($categore);
        $newAd->post()->associate($post);

    }

    




}
