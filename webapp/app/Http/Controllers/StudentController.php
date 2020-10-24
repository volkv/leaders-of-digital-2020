<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\University;

class StudentController extends Controller
{
    public function index () {
        $students = Student::all();

        return view('student.index', compact('students'));
    }
    public function single (Student $student) {

        return view('student.single', compact('student'));

    }
}
