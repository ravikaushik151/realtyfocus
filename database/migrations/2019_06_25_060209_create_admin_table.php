<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username');
			$table->string('password');
			$table->string('image');
			$table->dateTime('last_login');
			$table->dateTime('date');
			$table->string('f_name');
			$table->string('l_name');
			$table->string('thumb_img');
			$table->string('email');
			$table->string('role');
			$table->string('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
