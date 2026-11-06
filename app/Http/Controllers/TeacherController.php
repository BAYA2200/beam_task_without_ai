<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Resources\TeacherResourse;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TeacherResourse::collection(Teacher::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $post = $request->validated();
        $posw = Teacher::create($post);
        return response()->json(new TeacherResourse($posw), 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {   
        return new TeacherResourse($teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {   
        
        $data = $request->validated();
        $teacher->update($data);
        return new TeacherResourse($teacher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->noContent();
    }
}
