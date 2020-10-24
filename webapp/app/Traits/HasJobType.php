<?php


namespace App\Traits;

use App\Models\JobType;


trait HasJobType
{
    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }
}