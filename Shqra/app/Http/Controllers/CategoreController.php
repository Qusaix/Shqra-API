<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categores;

class CategoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
     
    public function get_all_categores()
    {
        $categore =  Categores::get();

        return response()->json([
            'categore'=>$categore->toArray(),
             'msg'=>'All Main Categores In The Application',
        ],200);
    }




}
