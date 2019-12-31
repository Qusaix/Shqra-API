<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;
class HomeController extends Controller
{
    public function index()
    {
        $categores = Categores::get();

        return view('index',compact('categores'));
    }
}
