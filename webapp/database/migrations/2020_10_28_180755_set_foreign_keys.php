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
