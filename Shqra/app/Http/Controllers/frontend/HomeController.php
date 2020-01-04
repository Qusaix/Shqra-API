<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
use App\Ads;
use App\Featured;


class HomeController extends Controller
{
    public function index()
    {
        $categores = Categores::get();
        $featured = Featured::where('featured',1)->get();
        $onSale = Featured::where('new_price',"!=",null)->get();

        $ads = Ads::find(1);

        return view('index',compact(
        'categores',
        'ads',
        'featured',
        'onSale'
    ));
    }
}
