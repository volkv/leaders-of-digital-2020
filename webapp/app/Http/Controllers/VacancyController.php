<?php


namespace App\Http\Controllers;


use App\Models\Vacancy;

class VacancyController
{
    public function index() {
        $vacancies = Vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    public function single(Vacancy $vacancy) {
        return view('vacancy.single', compact('vacancy'));
    }
}