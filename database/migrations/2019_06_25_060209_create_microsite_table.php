<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMicrositeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('microsite', function(Blueprint $table)
		{
			$table->integer('micro_id', true);
			$table->string('name');
			$table->string('possession');
			$table->string('no_of_units', 50);
			$table->string('total_area', 100);
			$table->string('location', 100);
			$table->string('sub_location', 100);
			$table->string('zone', 100);
			$table->text('sprice', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('microsite');
	}

}
