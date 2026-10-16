<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCreateConroller extends Controller
{
    public function create(){
        return view('post.create');
    }
}
