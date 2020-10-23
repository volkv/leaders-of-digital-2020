<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Student;
use App\Models\University;
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
        University::factory(10)->create();
        Student::factory(10)->create();
        Company::factory(10)->create();
    }
}
