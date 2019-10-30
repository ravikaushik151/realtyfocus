<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNavigationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('navigation', function(Blueprint $table)
		{
			$table->foreign('micro_id', 'navigation_ibfk_1')->references('micro_id')->on('microsite')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('navigation', function(Blueprint $table)
		{
			$table->dropForeign('navigation_ibfk_1');
		});
	}

}
