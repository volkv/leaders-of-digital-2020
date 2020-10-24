<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasEvents;
use App\Traits\HasProfilePhoto;
use App\Traits\HasSlug;
use App\Traits\HasWorkAreas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Student
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $rating
 * @property string $city
 * @property string $profile_photo
 * @property string $slug
 * @property string $status
 * @property int $age
 * @property int $gender
 * @property string $phone
 * @property string $course
 * @property string $specialty
 * @property array $courses
 * @property array $achievements
 * @property array $work_exp
 * @property array $skills
 * @property array $languages
 * @property array $marks
 * @property array $works
 * @property array $practices
 * @property array $tests_passed
 * @property string $video_cv
 * @property string $about
 * @property int $job_type_id
 * @property int $university_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Event[] $events
 * @property-read int|null $events_count
 * @property-read mixed $profile_photo_url
 * @property-read mixed $url
 * @property-read \App\Models\University $university
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkArea[] $workAreas
 * @property-read int|null $work_areas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAchievements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCourses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereJobTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePractices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereSpecialty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereTestsPassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereVideoCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereWorkExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereWorks($value)
 * @mixin \Eloquent
 */
class Student extends Model implements SluggableContract
{
    use HasFactory, HasSlug, HasProfilePhoto, HasWorkAreas, HasEvents;

    protected $casts = [
        'courses'      => 'array',
        'achievements' => 'array',
        'work_exp'     => 'array',
        'skills'       => 'array',
        'languages'    => 'array',
        'marks'        => 'array',
        'works'        => 'array',
        'practices'    => 'array',
        'tests_passed' => 'array',
    ];

    public function getSlugField(): string
    {
        return $this->name;
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function getUrlAttribute()
    {
        return route('students.single', ['student' => $this->slug]);
    }

}
