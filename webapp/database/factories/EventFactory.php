<?php

namespace Database\Factories;

use App\Helpers\NCFU;
use App\Models\Event;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $universityID = rand(1, University::orderByDesc('id')->first()->id);
       $university =  University::find($universityID);
        $event = rand(0,1) ? 'Ярмарка Вакансий' : 'Хакатон';

        $start = now()->addDays(rand(0,5));

        return [
            'name' =>$event . ' ' . $university->short_name ,
            'university_id' =>$universityID,
            'city' => $this->faker->city ,
            'description' => $this->faker->realText(400) ,
            'date_start' => $start ,
            'date_end' => $start->addDays(rand(1,10)) ,

        ];
    }
}
