<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Polls extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('polls', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_ar');
			$table->string('name_en');
			$table->string('choose_ar');
			$table->string('choose_en');
			$table->timestamp('from');
			$table->timestamp('to');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('polls');
	}

}
