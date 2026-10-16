<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCreateConroller extends Controller
{
    public function store(Request $request){
        Post::create([
            'name'=> $request->input('name'),
            'discription'=> $request->input('discription'),
        ]);
    }
}
