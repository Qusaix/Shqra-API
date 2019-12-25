<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Subcategores;

class PostController extends Controller
{
    public function get_all_posts($id)
    {
        $subcategore = Subcategores::find($id);

        return respose()->json([
            'Posts'=>$subcategore->post(),
            'msg'=>'All Posts In The Applacation'
        ]);
    }
}
