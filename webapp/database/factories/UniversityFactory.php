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

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'city' => $this->faker->city,

            'short_name' => $this->faker->randomLetter.$this->faker->randomLetter.$this->faker->randomLetter,

            'profile_photo' => "/media/universities/".rand(1, 2),
        ];
    }
}
