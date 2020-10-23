<?php


namespace App\Helpers;


use Illuminate\Support\Str;

class NCFU
{

    static function getSlugForEntity($model, string $title): string
    {
        $trySlug = Str::slug($title);

        $i = 2;

        $slug = $trySlug;

        while ( $builder = $model->where('slug', $slug)->where('id', '!=', $model->id)->exists()) {
            $slug = $trySlug.'-'.$i;
            $i++;
        }

        return $slug;
    }

}