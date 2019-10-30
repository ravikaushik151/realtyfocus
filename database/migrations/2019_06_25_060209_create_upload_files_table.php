<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upload_files', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('micro_id')->index('micro_id');
			$table->string('broucher');
			$table->string('payment_plan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upload_files');
	}

}
