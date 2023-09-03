<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();

        return view('index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Student::create([
            'name' => $request->name
        ]);

        return redirect()->route('index')->with('message', 'Student successfully added!');
    }
}
