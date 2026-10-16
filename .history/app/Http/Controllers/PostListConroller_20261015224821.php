<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostListConroller extends Controller
{
    public function index(){
        $post = Post::all();
        return view('post.list',[
            'post'=> $post,
        ]);
    }
}
