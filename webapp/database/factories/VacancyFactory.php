<?php

namespace Database\Factories;

use App\Helpers\NCFU;
use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prefixes = [
            'Младший',
            'Junior',
            'Стажер',
            'Практикант',
        ];
        $prefix = $prefixes[array_rand($prefixes)];
        return [
            'name' =>$prefix . ' ' . NCFU::getRandomSpecialty(),
            'city' =>$this->faker->city,
            'description' =>$this->faker->realText(100),
            'requirement' =>$this->faker->realText(500),
            'terms' =>$this->faker->realText(100),
            'job_type_id' =>rand(1,3),
            'company_id' =>rand(1,Company::orderByDesc('id')->first()->id),
        ];
    }
}
