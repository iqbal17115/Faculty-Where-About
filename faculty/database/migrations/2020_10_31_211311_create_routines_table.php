<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->string('course_title');
            $table->string('dept');
            $table->string('batch');
            $table->string('section');
            $table->string('day');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('building');
            $table->string('room_no');
            $table->string('initial');
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
        Schema::dropIfExists('routines');
    }
}
