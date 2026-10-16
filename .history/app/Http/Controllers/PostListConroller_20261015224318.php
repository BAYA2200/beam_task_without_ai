<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostListConroller extends Controller
{
    public function index(){
        $useers = User::all();
        return view('userlist.list',[
            'useers'=> $useers,
        ]);
    }
}
