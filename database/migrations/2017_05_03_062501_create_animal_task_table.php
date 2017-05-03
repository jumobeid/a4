<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('animal_task', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('task_id')->unsigned();
        $table->foreign('task_id')->references('id')->on('tasks');

        $table->integer('animal_id')->unsigned();
        $table->foreign('animal_id')->references('id')->on('animals');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('animal_task');
    }
}
