<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        //return ' Class Teacher In INDEX';
        //return 'id =>'.$id;
        return view('teacher.teacher');
    }
    public function show(Request $request)
    {
        $teacher_name = $request->teacher_name;
        if ($teacher_name == 'Mohamed') {
            return 'The Name Is Mohamed';
        } else {
            // return $teacher_name;
            return view('teacher.show', compact('teacher_name'));
        }
    }
}
