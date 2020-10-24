<?php


namespace App\Traits;


use App\Models\WorkArea;

trait HasWorkAreas
{
    public function workAreas()
    {
        return $this
            ->morphToMany(WorkArea::class,'work_area_morph', 'work_areas_morph');
    }
}