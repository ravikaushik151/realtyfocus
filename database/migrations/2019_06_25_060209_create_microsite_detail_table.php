<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMicrositeDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('microsite_detail', function(Blueprint $table)
		{
			$table->integer('md_id', true);
			$table->string('featured_image');
			$table->integer('micro_id')->index('micro_id');
			$table->integer('builder_id')->index('builder_id');
			$table->string('am_id')->index('am_id');
			$table->string('bank_id');
			$table->string('legal_id');
			$table->text('about', 65535);
			$table->integer('type_id');
			$table->integer('status_id')->index('status_id');
			$table->string('masterplan_image');
			$table->string('locationmap_title');
			$table->string('longitude');
			$table->string('latitude');
			$table->string('location_image');
			$table->string('gallery_image', 500);
			$table->string('slider_image');
			$table->string('adv_image');
			$table->string('mlogo');
			$table->string('price');
			$table->integer('max_price');
			$table->integer('min_price');
			$table->string('rooms');
			$table->string('address');
			$table->string('location');
			$table->string('phone');
			$table->string('email');
			$table->string('built_area');
			$table->string('area_unit');
			$table->string('totalarea');
			$table->index(['type_id','status_id'], 'type_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('microsite_detail');
	}

}
