<?php

namespace App\Traits;

use App\Contracts\SluggableContract;
use Illuminate\Support\Str;

trait HasSlug
{
    protected static function booted()
    {
        static::creating(function (SluggableContract $model) {

            $trySlug = Str::slug($model->getSlugField());

            $i = 2;

            $slug = $trySlug;

            while ( $builder = $model->where('slug', $slug)->where('id', '!=', $model->id)->exists()) {
                $slug = $trySlug.'-'.$i;
                $i++;
            }

            $model->slug  = $slug;
        });
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
