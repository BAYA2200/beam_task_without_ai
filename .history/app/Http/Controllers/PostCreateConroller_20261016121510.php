<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostCreateConroller extends Controller
{
    public function create(){
        $post = Post::all();
        $users = User::all();
        return view('post.create',[
            'post'=> $post,
            'users'=>$users
         ]  );
    }
    public function store(Request $request)
	{
		$post = new Post;
		$post->name = $request->input('name');
		$post->discription = $request->input('discription');
        $post->user_id = $request->input('user_id');
		$post->save();
        $users = User::all();
		
		return redirect('/postcreate');
	}
   
}
