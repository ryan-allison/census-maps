<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensusCounties extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('census_counties', function($table)
		{
			$table->string('state');
			$table->string('state_ansi');
			$table->string('county_ansi');
			$table->string('county_name');
			$table->string('ansi_Cl');
			$table->string('county_fips');
			$table->primary('county_fips');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('census_counties');
	}

}
