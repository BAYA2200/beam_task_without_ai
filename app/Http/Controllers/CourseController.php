<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Resources\CourseResourse;
use App\Http\Resources\TeacherResourse;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return CourseResourse::collection(Course::all());
    }

    public function store(CourseRequest $request)
    {   
        $res = new Course();
        $res->course_name = $request->course_name;
        $res->teacher_id = $request->teacher_id;
        $res->save();
        return response()->json(new CourseResourse($res), 201);
    }

    
    public function show(Teacher $teacher, Course $course){
        $res = new TeacherResourse($teacher);
        $com = new CourseResourse($course);
        return response()->json([
            'data'=> $com
        ]);
        
    }
    

    
    public function update(Teacher $teacher,CourseRequest $request,Course $course){
        $res = new TeacherResourse($teacher);
        $com_res = new CourseResourse($course);
        $data = $request->validated();
        $com_res->update($data);
        return new CourseResourse($com_res);
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher, Course $course)
    {
        $res = new TeacherResourse($teacher);
        $com_res = new CourseResourse($course);
        $course->delete();
        return response()->noContent();
    }
}
