<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFloorPlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('floor_plan', function(Blueprint $table)
		{
			$table->integer('id_floor', true);
			$table->integer('micro_id')->index('micro_id');
			$table->string('title');
			$table->string('image');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('floor_plan');
	}

}
