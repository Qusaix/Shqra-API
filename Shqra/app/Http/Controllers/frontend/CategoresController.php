<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categores;

class CategoresController extends Controller
{
    public function index()
    {
        $categores  = Categores::get();

        return view('categoers.index',compact('categores'));
    }
}
