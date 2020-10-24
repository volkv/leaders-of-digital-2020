<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasProfilePhoto;
use App\Traits\HasSlug;
use App\Traits\HasWorkArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\University
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $short_name
 * @property string $profile_photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $profile_photo_url
 * @property-read mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkArea[] $workAreas
 * @property-read int|null $work_areas_count
 * @method static \Illuminate\Database\Eloquent\Builder|University newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University query()
 * @method static \Illuminate\Database\Eloquent\Builder|University whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class University extends Model implements SluggableContract
{
    use HasFactory, HasSlug, HasWorkArea, HasProfilePhoto;

    public function getSlugField(): string
    {
        return $this->name;
    }

    public function getUrlAttribute()
    {
        return route('universities.single', ['university' => $this->slug]);
    }
}
