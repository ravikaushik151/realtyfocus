<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuilderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('builder', function(Blueprint $table)
		{
			$table->integer('builder_id', true);
			$table->string('name')->index('name');
			$table->string('logo');
			$table->string('address');
			$table->text('about', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('builder');
	}

}
