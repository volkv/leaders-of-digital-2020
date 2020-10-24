<?php


namespace App\Traits;


use App\Models\WorkArea;

trait HasWorkArea
{
    public function workAreas()
    {
        return $this
            ->morphToMany(WorkArea::class,'work_areable', 'work_areas_morph');
    }
}