<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meta', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('micro_id');
			$table->string('title');
			$table->string('meta_name');
			$table->string('keyword');
			$table->text('metadescription', 65535);
			$table->string('favicon', 250);
			$table->string('status', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meta');
	}

}
