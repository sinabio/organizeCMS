<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('fuel', function($table)
        {
            $table->increments('id');
            $table->date('date');
            $table->decimal('fuel_amount', 10, 2);
            $table->decimal('price', 10, 2);
            $table->decimal('ppl', 10, 2); // Price Per Litre
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('fuel');
	}

}
