<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResourse;
use App\Http\Resources\PostResourse;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function index()
    {
        return CommentResourse::collection(Comment::all());
    }

    public function store(CommentRequest $request)
    {   
        $res = new Comment();
        $res->comment = $request->comment;
        $res->post_id = $request->post_id;
        $res->save();
        // return CommentResourse::collection($res);
        return response()->json(new CommentResourse($res), 201);
    }

    
    public function show(Post $post, Comment $comment){
        $res = new PostResourse($post);
        $com = new CommentResourse($comment);
        return response()->json([
            'data'=> $com
        ]);
        
    }
    

    
    public function update(Post $post,CommentRequest $request,Comment $comment){
        $res = new PostResourse($post);
        $com_res = new CommentResourse($comment);
        $data = $request->validated();
        $com_res->update($data);
        return new CommentResourse($com_res);
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Comment $comment)
    {
        $res = new PostResourse($post);
        $com_res = new CommentResourse($comment);
        $comment->delete();
        return response()->noContent();
    }
}
