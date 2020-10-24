<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Event
 *
 * @property int $id
 * @property string $city
 * @property string $name
 * @property string $description
 * @property int $university_id
 * @property \Illuminate\Support\Carbon $date_start
 * @property \Illuminate\Support\Carbon $date_end
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\University $university
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Event extends Model implements SluggableContract
{
    use HasFactory, HasSlug;

    protected $dates = ['date_start','date_end'];
    public function getSlugField(): string
    {
        return $this->name;
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function students()
    {
        return $this->morphedByMany(Student::class, 'event_morph', 'events_morph');
    }

    public function companies()
    {
        return $this->morphedByMany(Company::class, 'event_morph', 'events_morph');
    }



    public function vacancies()
    {
        return $this->morphedByMany(Vacancy::class, 'event_morph', 'events_morph');
    }
}
