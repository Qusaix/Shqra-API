<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
use App\Ads;
use App\Featured;
use App\Countdown;
use App\Post;


class HomeController extends Controller
{
    public function index()
    {
        $categores = Categores::get();
        $featured = Featured::where('featured',1)->get();
        $onSale = Featured::where('new_price',"!=",null)->get();
        $countdowns = Countdown::get();
        $ads = Ads::find(1);
        $slider = Post::take(3)->get();


      

        return view('index',compact(
        'categores',
        'ads',
        'featured',
        'onSale',
        'countdowns',
        "slider"
    ));
    }
}
