<?php


namespace App\Http\Controllers;


use App\Models\University;

class UniversityController extends Controller
{
    public function index() {
        $universities = University::all();
        return view('university.index', compact('universities'));
    }

    public function single(University $university) {
        return view('university.single', compact('university'));
    }
}