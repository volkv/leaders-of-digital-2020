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
dd($workArea);
        return view('home.index', compact('students','companies','universities','vacancies'));
    }


}
