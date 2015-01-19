<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vehicles', function($table)
        {
            $table->increments('id');
            $table->integer('make');
            $table->string('model');
            $table->decimal('engine_size', 10, 1);
            $table->date('date_bought')->nullable();
            $table->decimal('price', 10, 2);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('vehicles');
	}

}
