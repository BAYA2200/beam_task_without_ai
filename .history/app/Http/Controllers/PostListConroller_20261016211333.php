<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostListConroller extends Controller
{
    public function index(){
        $post = Post::all();
        $users = User::all();
        return view('post.list',[
            'post'=> $post,
            'users'=>$users
        ]);
    }
    public function destroy($id){
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect('/postlist');
    }

    public function put($id){
        $post = Post::findOrFail($id);

        return view('post.edit', ['post'=>$post]);
    }

    public function update(Request $request, $id)
	{
		$post = Post::findOrFail($id);
		$post->name = $request->input('name');
		$post->discription = $request->input('discription');
		$post->save();
		
		return redirect('/postlist');
	}

}
