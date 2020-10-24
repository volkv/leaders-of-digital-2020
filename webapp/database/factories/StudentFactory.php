<?php

namespace Database\Factories;

use App\Helpers\NCFU;
use App\Models\Student;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = rand(1,0);
        $genderPath = $gender ? 'female':'male';

        return [
            'name' => $this->faker->name($genderPath),
            'email' => $this->faker->unique()->safeEmail,
            'rating' => round (rand(10,50) / 10,2),
            'profile_photo' => "media/students/$genderPath/" . rand(1,10) . '.jpg',
            'status' => $this->faker->realText(),
            'age' => rand(16,25),
            'city' => $this->faker->city,
            'gender' => $gender,
            'phone' => $this->faker->phoneNumber,
            'course' => rand(1,5),
            'specialty' => NCFU::getRandomSpecialty(),
            'look_for' => rand(1,3),
            'courses' => [],
            'achievements' => [],
            'work_exp' => [],
            'skills' => NCFU::getRandomSkills(rand(2,6)),
            'languages' => [],
            'marks' => [],
            'works' => [],
            'practices' => [],
            'tests_passed' => [],
            'video_cv' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'about' => $this->faker->realText(500),
            'university_id' => rand(1, University::orderByDesc('id')->first()->id) ,

        ];
    }
}
