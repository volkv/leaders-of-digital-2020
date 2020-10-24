<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\Student;


class EventController extends Controller
{
    public function index () {
        $events = Event::limit(15)->get();

        return view('event.index', compact('events'));
    }
    public function single (Event $event) {


        $companies = $event->companies()->limit(3)->get();
        $students = $event->students()->limit(3)->get();
        $vacancies = $event->vacancies()->limit(3)->get();

        return view('event.single', compact('event','students','companies','vacancies'));

    }

}
