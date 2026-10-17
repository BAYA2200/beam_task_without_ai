<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostDeleteController extends Controller
{
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/postlist');
    }
}
