<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ToastrComposer
{
    public function compose(View $view)
    {

        if (Session::has('message')) {
            $type    = 'success';
            $message = Session::get('message');

            $view->with('toastr', ['message' => $message, 'type' => $type]);
        }

    }
}