<?php

namespace Database\Factories;

use App\Helpers\NCFU;
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
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,

            'short_name' => mb_strtoupper(NCFU::getRandomLetter().NCFU::getRandomLetter().NCFU::getRandomLetter().'У'),

            'profile_photo' => "media/universities/".rand(1, 2).'.jpg',
        ];
    }
}