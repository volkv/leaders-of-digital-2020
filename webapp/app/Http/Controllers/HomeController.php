<?php

namespace App\Http\Controllers;

use App\Helpers\NCFU;
use App\Models\Student;

class HomeController extends Controller
{
    public function index () {

        $students = Student::limit(3)->get();

        return view('home.index', compact('students'));
    }

}
