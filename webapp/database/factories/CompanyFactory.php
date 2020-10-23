<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'about' => $this->faker->realText(500),
            'rating' => round (rand(10,50) / 10,2),
            'city' =>$this->faker->city,
            'email' =>$this->faker->email,
            'profile_photo' => "media/companies/" . rand(1,6) . '.jpg',
        ];
    }
}
