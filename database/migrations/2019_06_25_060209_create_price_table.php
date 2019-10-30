<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('price', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type');
			$table->integer('price');
			$table->integer('micro_id');
			$table->integer('sqft');
			$table->integer('basic_cost');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('price');
	}

}
