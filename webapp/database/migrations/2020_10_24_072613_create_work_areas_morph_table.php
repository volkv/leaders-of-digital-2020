<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkAreasMorphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_areas_morph', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_area_id');
            $table->foreign('work_area_id')->references('id')->on('work_areas');
            $table->morphs('work_areable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_areas_morph');
    }
}
