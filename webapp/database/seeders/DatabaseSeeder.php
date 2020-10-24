<?php

namespace Database\Seeders;

use App\Helpers\NCFU;
use App\Models\Company;
use App\Models\Event;
use App\Models\JobType;
use App\Models\Student;
use App\Models\University;
use App\Models\Vacancy;
use App\Models\WorkArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        JobType::insert([
            ['name' => 'Трудоустройство'],
            ['name' => 'Стажировка'],
            ['name' => 'Практика'],
        ]);

        University::factory(50)->create();
        Student::factory(50)->create();
        Company::factory(50)->create();
        Vacancy::factory(50)->create();
        Event::factory(50)->create();

        foreach (NCFU::getSpecialities() as $speciality) {
            WorkArea::create(['name' => $speciality]);
        }

        foreach (Student::all() as $model) {
            $this->attachRandomAreasToModel($model);
            $this->attachRandomEventToModel($model);
        }

        foreach (University::all() as $model) {
            $this->attachRandomAreasToModel($model);
        }

        foreach (Company::all() as $model) {
            $this->attachRandomAreasToModel($model);
            $this->attachRandomEventToModel($model);
        }

        foreach (Vacancy::all() as $model) {
            $this->attachRandomAreasToModel($model);
            $this->attachRandomEventToModel($model);
        }
    }

    public function attachRandomAreasToModel(Model $model)
    {
        $areas = WorkArea::all()->pluck('id')->shuffle()->take(rand(2, 6));
        $model->workAreas()->attach($areas);
    }

    public function attachRandomEventToModel(Model $model)
    {
        $areas = Event::all()->pluck('id')->shuffle()->take(rand(2, 6));
        $model->events()->attach($areas);
    }
}
