<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categores;

class SubcategoreController extends Controller
{
    public function get_all_subcategores($id)
    {
        $categore = Categores::find($id);
        
        return response()->json([
            'Subcategores'=> $categore->subcategores(), 
            'msg'=>'All Subcategores',
        ],200);

    }
}
