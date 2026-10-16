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
		$post->surname = $request->input('discription');
		$post->save();
		
		return redirect('/poststore');
	}
}
