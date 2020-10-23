<?php

namespace App\Models;

use App\Contracts\SluggableContract;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Student
 *
 * @property int $id
 * @property string $name
 * @property string $rating
 * @property string $profile_photo
 * @property string $email
 * @property string $slug
 * @property string $status
 * @property int $age
 * @property int $gender
 * @property string $phone
 * @property string $course
 * @property string $specialty
 * @property int $look_for
 * @property mixed $courses
 * @property mixed $achievements
 * @property mixed $work_exp
 * @property mixed $skills
 * @property mixed $languages
 * @property mixed $marks
 * @property mixed $works
 * @property mixed $practices
 * @property mixed $tests_passed
 * @property string $video_cv
 * @property string $about
 * @property int $university_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAchievements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCourses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLookFor($value)
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
    use HasFactory, HasSlug;

    protected $casts = [
        'courses' => 'array',
        'achievements' => 'array',
        'work_exp' => 'array',
        'skills' => 'array',
        'languages' => 'array',
        'marks' => 'array',
        'works' => 'array',
        'practices' => 'array',
        'tests_passed' => 'array',
    ];
    public function getSlugField(): string
    {
        return $this->name;
    }

}
