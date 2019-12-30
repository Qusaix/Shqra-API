<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Subcategores;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function get_all_posts($id)
    {
        $subcategore = Subcategores::find($id);

        return response()->json([
            'Posts'=>$subcategore->post(),
            'msg'=>'All Posts In The Applacation'
        ],200);        
    }

    public function get_one_post($id)
    {
        return response()->json([
            'post'=>Post::find($id),
            'msg'=>'Post User choose',
        ]);
    }

    


}
