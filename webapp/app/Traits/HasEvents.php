<?php


namespace App\Traits;

use App\Models\Event;


trait HasEvents
{
    public function events()
    {
        return $this
            ->morphToMany(Event::class,'event_morph', 'events_morph');
    }
}