<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMicrositeDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('microsite_detail', function(Blueprint $table)
		{
			$table->foreign('micro_id', 'microsite_detail_ibfk_1')->references('micro_id')->on('microsite')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('builder_id', 'microsite_detail_ibfk_2')->references('builder_id')->on('builder')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('type_id', 'microsite_detail_ibfk_3')->references('type_id')->on('prop_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('status_id', 'microsite_detail_ibfk_4')->references('status_id')->on('prop_status')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('microsite_detail', function(Blueprint $table)
		{
			$table->dropForeign('microsite_detail_ibfk_1');
			$table->dropForeign('microsite_detail_ibfk_2');
			$table->dropForeign('microsite_detail_ibfk_3');
			$table->dropForeign('microsite_detail_ibfk_4');
		});
	}

}
