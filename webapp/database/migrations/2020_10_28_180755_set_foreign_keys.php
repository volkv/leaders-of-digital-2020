<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
        });


        Schema::table('event_student', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->foreign('event_id')->references('id')->on('events')->cascadeOnDelete();
        });

        Schema::table('event_university', function (Blueprint $table) {
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
            $table->foreign('event_id')->references('id')->on('events')->cascadeOnDelete();
        });

        Schema::table('student_work_area', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->foreign('work_area_id')->references('id')->on('work_areas')->cascadeOnDelete();
        });


        Schema::table('vacancy_work_area', function (Blueprint $table) {
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->cascadeOnDelete();
            $table->foreign('work_area_id')->references('id')->on('work_areas')->cascadeOnDelete();
        });

        Schema::table('company_work_area', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
            $table->foreign('work_area_id')->references('id')->on('work_areas')->cascadeOnDelete();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
