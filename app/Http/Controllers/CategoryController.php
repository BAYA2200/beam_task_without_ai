<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResourse;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $list_category = Category::with('post')->get();
        // return new CategoryResourse($list_category);
        return Category::find('1')->post;
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $post = $request->validated();
        $posw = Category::create($post);
        return response()->json(new CategoryResourse($posw), 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {   
        return new CategoryResourse($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {   
        
        $data = $request->validated();
        $category->update($data);
        return new CategoryResourse($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent();
    }
}
