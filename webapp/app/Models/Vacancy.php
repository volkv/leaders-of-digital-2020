<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasEvents;
use App\Traits\HasJobType;
use App\Traits\HasSlug;
use App\Traits\HasWorkAreas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vacancy
 *
 * @property int $id
 * @property string $city
 * @property string $name
 * @property string $description
 * @property string $requirement
 * @property string $terms
 * @property int $job_type_id
 * @property string $slug
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Event[] $events
 * @property-read int|null $events_count
 * @property-read \App\Models\JobType $jobType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkArea[] $workAreas
 * @property-read int|null $work_areas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereJobTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Vacancy extends Model implements SluggableContract
{
    use HasFactory, HasWorkAreas, HasSlug, HasEvents, HasJobType;

    public function getSlugField(): string
    {
       return $this->name;
    }
    public function company() {
     return   $this->belongsTo(Company::class);
    }

}
