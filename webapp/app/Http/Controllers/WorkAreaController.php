<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Student;
use App\Models\University;
use App\Models\Vacancy;
use App\Models\WorkArea;
use Illuminate\Http\Request;

class WorkAreaController extends Controller
{
    public function single(WorkArea $workArea)
    {
       $universities = $workArea->universities()->limit(3)->get();
        $companies = $workArea->companies()->limit(3)->get();
        $students = $workArea->students()->limit(3)->get();
        $vacancies = $workArea->vacancies()->limit(3)->get();

        return view('workarea.single', compact('workArea','students','companies','universities','vacancies'));
    }


}
