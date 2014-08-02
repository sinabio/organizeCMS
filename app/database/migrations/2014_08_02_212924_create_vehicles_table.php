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
            $table->date('date_bought')->nullable();
            $table->int('make', 10, 2);
            $table->string('model', 10, 2);
            $table->decimal('engine_size', 10, 1);
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
