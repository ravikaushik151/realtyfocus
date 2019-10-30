<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceAddonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_addon', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('service_id')->index('service_id');
			$table->string('name');
			$table->integer('qty');
			$table->integer('days');
			$table->integer('price');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_addon');
	}

}
