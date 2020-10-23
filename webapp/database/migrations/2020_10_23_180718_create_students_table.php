<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');

            $table->text('rating');
            $table->text('city');

            $table->text('profile_photo');

            $table->string('slug',255)->unique();
            $table->text('status');
            $table->unsignedInteger('age');
            $table->boolean('gender');
            $table->text('phone');

            $table->text('course');
            $table->text('specialty');

            $table->unsignedInteger('look_for');

            $table->json('courses');
            $table->json('achievements');
            $table->json('work_exp');

            $table->json('skills');
            $table->json('languages');
            $table->json('marks');
            $table->json('works');
            $table->json('practices');
            $table->json('tests_passed');


            $table->text('video_cv');
            $table->text('about');


            $table->unsignedBigInteger('university_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
