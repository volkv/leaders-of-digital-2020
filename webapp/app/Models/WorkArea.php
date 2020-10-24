<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\WorkArea
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\University[] $universities
 * @property-read int|null $universities_count
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkArea whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkArea extends Model implements SluggableContract
{
    use HasFactory, HasSlug;

    public function students()
    {
        return $this->morphedByMany(Student::class, 'work_areable', 'work_areas_morph');
    }

    public function companies()
    {
        return $this->morphedByMany(Company::class, 'work_areable', 'work_areas_morph');
    }

    public function universities()
    {
        return $this->morphedByMany(University::class, 'work_areable', 'work_areas_morph');
    }

    public function getSlugField(): string
    {
       return $this->name;
    }

    public function getUrlAttribute()
    {
        return route('workArea.single', ['work_area' => $this->slug]);
    }
}
