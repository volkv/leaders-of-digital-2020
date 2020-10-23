<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\University
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $city
 * @property string $short_name
 * @property string $profile_photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|University newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University query()
 * @method static \Illuminate\Database\Eloquent\Builder|University whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class University extends Model implements SluggableContract
{
    use HasFactory, HasSlug;

    public function getSlugField(): string
    {
        return $this->name;
    }
}
