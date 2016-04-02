<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('siteName_ar');
			$table->string('siteName_en');
			$table->text('siteDisc_ar');
			$table->text('siteDisc_en');
			$table->text('tags_ar');
			$table->text('tags_en');
			$table->string('logo');
			$table->string('phone');
			$table->string('mobile');
			$table->string('fax');
			$table->string('email');
			$table->string('address_ar');
			$table->string('address_en');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('skype');
			$table->string('google_plus');
			$table->string('youtube');
			$table->string('instagram');
			$table->string('linkedin');
			$table->string('pinterest');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
