<?php

namespace App\Traits;

use App\Contracts\SluggableContract;
use Illuminate\Support\Str;

trait HasProfilePhoto
{
public function getProfilePhotoUrlAttribute() {
    return asset($this->profile_photo);
}
}
