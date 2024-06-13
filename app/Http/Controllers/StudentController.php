<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "<h1>Saccess controllers";
    }
    public function show()
    {
        //return "show Student function";
        return view('student');
    }
}
