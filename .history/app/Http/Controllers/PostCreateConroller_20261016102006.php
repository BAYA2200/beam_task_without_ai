<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostCreateConroller extends Controller
{
    public function create(){
        return view('post.create');
    }
    public function store(Request $request)
	{
		$post = new Post;
		$post->name = $request->input('name');
		$post->discription = $request->input('discription');
        $post->user_id = $request('user_id');
		$post->save();
		
		return redirect('/poststore');
	}
}
