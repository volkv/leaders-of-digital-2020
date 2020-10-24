<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasProfilePhoto;
use App\Traits\HasSlug;
use App\Traits\HasWorkArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $about
 * @property string $rating
 * @property string $address
 * @property string $email
 * @property string $slug
 * @property string $profile_photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkArea[] $workAreas
 * @property-read int|null $work_areas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Company extends Model implements SluggableContract
{
    use HasFactory, HasSlug, HasProfilePhoto, HasWorkArea;

    public function getSlugField(): string
    {
       return $this->name;
    }
}