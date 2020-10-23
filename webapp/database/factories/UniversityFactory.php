<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = University::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'city' => $this->faker->city,

            'short_name' =>mb_strtoupper( mb_substr($this->faker->name(),1,1).mb_substr($this->faker->name(),1,1).mb_substr($this->faker->name(),1,1)),

            'profile_photo' => "media/universities/".rand(1, 2) . '.jpg',
        ];
    }
}