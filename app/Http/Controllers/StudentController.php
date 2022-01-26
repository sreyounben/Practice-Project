<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.create');
    }
    public function store(Request $request){
        // Method 1
        // $student = new Student;
        // $student->name = $request->input('name');
        // $student->email = $request->input('email');
        // $student->course = $request->input('course');
        // $student->section = $request->input('section');
        // $student->save();
        
        // Method 2
        // Student::create($request->all());

        // Method 3
        // Student::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ]);

        // Method 4 Plus Validation

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('status','Student Added Successfully');
    }
}
