<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\Models\courses;

class CoursesController extends Controller
{
    //

    public function index(){

        return view('admin/courses/index');
    }

    public function addcourseaction(Request $request){

       $validation =  $request->validate([
        'course_name'=> ' required',
         'course_code'=> ' required',
          'couse_duration'=> ' required',
           'Department'=> ' required',
            'course_description'=> ' required'


        ]);


                Courses::create([
                    'couse_name'       => $request->course_name,
                    'course_code'       => $request->course_code,
                    'couse_duration'   => $request->couse_duration,
                    'Department'        => $request->Department,
                    'course_description'=> $request->course_description,
                ]);

                return redirect('/admin-courses')->with('success', 'Course added successfully');


    }
}
