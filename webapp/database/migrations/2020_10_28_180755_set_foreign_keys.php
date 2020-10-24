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
            $table->foreign('job_type_id')->references('id')->on('job_types')->cascadeOnDelete();
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
            $table->foreign('job_type_id')->references('id')->on('job_types')->cascadeOnDelete();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
        });

        Schema::table('applications', function (Blueprint $table) {
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
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
