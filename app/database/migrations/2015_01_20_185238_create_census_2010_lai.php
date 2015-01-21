<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensus2010Lai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('census_2010_lai', function($table)
		{
			$table->string('county_fips');
			$table->string('county_name');

			$table->mediumInteger('hh_type1_income_min');
			$table->mediumInteger('hh_type1_income_max');
			$table->mediumInteger('hh_type1_income');
			$table->tinyInteger('hh_type1_size');
			$table->tinyInteger('hh_type1_workers');
			$table->double('hh_type1_ht');
			$table->double('hh_type1_h');
			$table->double('hh_type1_t');
			$table->double('hh_type1_autos');
			$table->double('hh_type1_vmt');
			$table->double('hh_type1_transit_trips');
			$table->double('hh_type1_ht_own');
			$table->double('hh_type1_h_own');
			$table->double('hh_type1_t_own');
			$table->double('hh_type1_autos_own');
			$table->double('hh_type1_vmt_own');
			$table->double('hh_type1_transit_trips_own');
			$table->double('hh_type1_ht_rent');
			$table->double('hh_type1_h_rent');
			$table->double('hh_type1_t_rent');
			$table->double('hh_type1_autos_rent');
			$table->double('hh_type1_vmt_rent');
			$table->double('hh_type1_transit_trips_rent');
			
			$table->mediumInteger('hh_type2_income_min');
			$table->mediumInteger('hh_type2_income_max');
			$table->mediumInteger('hh_type2_income');
			$table->tinyInteger('hh_type2_size');
			$table->tinyInteger('hh_type2_workers');
			$table->double('hh_type2_ht');
			$table->double('hh_type2_h');
			$table->double('hh_type2_t');
			$table->double('hh_type2_autos');
			$table->double('hh_type2_vmt');
			$table->double('hh_type2_transit_trips');
			$table->double('hh_type2_ht_own');
			$table->double('hh_type2_h_own');
			$table->double('hh_type2_t_own');
			$table->double('hh_type2_autos_own');
			$table->double('hh_type2_vmt_own');
			$table->double('hh_type2_transit_trips_own');
			$table->double('hh_type2_ht_rent');
			$table->double('hh_type2_h_rent');
			$table->double('hh_type2_t_rent');
			$table->double('hh_type2_autos_rent');
			$table->double('hh_type2_vmt_rent');
			$table->double('hh_type2_transit_trips_rent');
			
			$table->mediumInteger('hh_type3_income_min');
			$table->mediumInteger('hh_type3_income_max');
			$table->mediumInteger('hh_type3_income');
			$table->tinyInteger('hh_type3_size');
			$table->tinyInteger('hh_type3_workers');
			$table->double('hh_type3_ht');
			$table->double('hh_type3_h');
			$table->double('hh_type3_t');
			$table->double('hh_type3_autos');
			$table->double('hh_type3_vmt');
			$table->double('hh_type3_transit_trips');
			$table->double('hh_type3_ht_own');
			$table->double('hh_type3_h_own');
			$table->double('hh_type3_t_own');
			$table->double('hh_type3_autos_own');
			$table->double('hh_type3_vmt_own');
			$table->double('hh_type3_transit_trips_own');
			$table->double('hh_type3_ht_rent');
			$table->double('hh_type3_h_rent');
			$table->double('hh_type3_t_rent');
			$table->double('hh_type3_autos_rent');
			$table->double('hh_type3_vmt_rent');
			$table->double('hh_type3_transit_trips_rent');
			
			$table->mediumInteger('hh_type4_income_min');
			$table->mediumInteger('hh_type4_income_max');
			$table->mediumInteger('hh_type4_income');
			$table->tinyInteger('hh_type4_size');
			$table->tinyInteger('hh_type4_workers');
			$table->double('hh_type4_ht');
			$table->double('hh_type4_h');
			$table->double('hh_type4_t');
			$table->double('hh_type4_autos');
			$table->double('hh_type4_vmt');
			$table->double('hh_type4_transit_trips');
			$table->double('hh_type4_ht_own');
			$table->double('hh_type4_h_own');
			$table->double('hh_type4_t_own');
			$table->double('hh_type4_autos_own');
			$table->double('hh_type4_vmt_own');
			$table->double('hh_type4_transit_trips_own');
			$table->double('hh_type4_ht_rent');
			$table->double('hh_type4_h_rent');
			$table->double('hh_type4_t_rent');
			$table->double('hh_type4_autos_rent');
			$table->double('hh_type4_vmt_rent');
			$table->double('hh_type4_transit_trips_rent');
			
			$table->mediumInteger('hh_type5_income_min');
			$table->mediumInteger('hh_type5_income_max');
			$table->mediumInteger('hh_type5_income');
			$table->tinyInteger('hh_type5_size');
			$table->tinyInteger('hh_type5_workers');
			$table->double('hh_type5_ht');
			$table->double('hh_type5_h');
			$table->double('hh_type5_t');
			$table->double('hh_type5_autos');
			$table->double('hh_type5_vmt');
			$table->double('hh_type5_transit_trips');
			$table->double('hh_type5_ht_own');
			$table->double('hh_type5_h_own');
			$table->double('hh_type5_t_own');
			$table->double('hh_type5_autos_own');
			$table->double('hh_type5_vmt_own');
			$table->double('hh_type5_transit_trips_own');
			$table->double('hh_type5_ht_rent');
			$table->double('hh_type5_h_rent');
			$table->double('hh_type5_t_rent');
			$table->double('hh_type5_autos_rent');
			$table->double('hh_type5_vmt_rent');
			$table->double('hh_type5_transit_trips_rent');
			
			$table->mediumInteger('hh_type6_income_min');
			$table->mediumInteger('hh_type6_income_max');
			$table->mediumInteger('hh_type6_income');
			$table->tinyInteger('hh_type6_size');
			$table->tinyInteger('hh_type6_workers');
			$table->double('hh_type6_ht');
			$table->double('hh_type6_h');
			$table->double('hh_type6_t');
			$table->double('hh_type6_autos');
			$table->double('hh_type6_vmt');
			$table->double('hh_type6_transit_trips');
			$table->double('hh_type6_ht_own');
			$table->double('hh_type6_h_own');
			$table->double('hh_type6_t_own');
			$table->double('hh_type6_autos_own');
			$table->double('hh_type6_vmt_own');
			$table->double('hh_type6_transit_trips_own');
			$table->double('hh_type6_ht_rent');
			$table->double('hh_type6_h_rent');
			$table->double('hh_type6_t_rent');
			$table->double('hh_type6_autos_rent');
			$table->double('hh_type6_vmt_rent');
			$table->double('hh_type6_transit_trips_rent');
			
			$table->mediumInteger('hh_type7_income_min');
			$table->mediumInteger('hh_type7_income_max');
			$table->mediumInteger('hh_type7_income');
			$table->tinyInteger('hh_type7_size');
			$table->tinyInteger('hh_type7_workers');
			$table->double('hh_type7_ht');
			$table->double('hh_type7_h');
			$table->double('hh_type7_t');
			$table->double('hh_type7_autos');
			$table->double('hh_type7_vmt');
			$table->double('hh_type7_transit_trips');
			$table->double('hh_type7_ht_own');
			$table->double('hh_type7_h_own');
			$table->double('hh_type7_t_own');
			$table->double('hh_type7_autos_own');
			$table->double('hh_type7_vmt_own');
			$table->double('hh_type7_transit_trips_own');
			$table->double('hh_type7_ht_rent');
			$table->double('hh_type7_h_rent');
			$table->double('hh_type7_t_rent');
			$table->double('hh_type7_autos_rent');
			$table->double('hh_type7_vmt_rent');
			$table->double('hh_type7_transit_trips_rent');
			
			$table->mediumInteger('hh_type8_income_min');
			$table->mediumInteger('hh_type8_income_max');
			$table->mediumInteger('hh_type8_income');
			$table->tinyInteger('hh_type8_size');
			$table->tinyInteger('hh_type8_workers');
			$table->double('hh_type8_ht');
			$table->double('hh_type8_h');
			$table->double('hh_type8_t');
			$table->double('hh_type8_autos');
			$table->double('hh_type8_vmt');
			$table->double('hh_type8_transit_trips');
			$table->double('hh_type8_ht_own');
			$table->double('hh_type8_h_own');
			$table->double('hh_type8_t_own');
			$table->double('hh_type8_autos_own');
			$table->double('hh_type8_vmt_own');
			$table->double('hh_type8_transit_trips_own');
			$table->double('hh_type8_ht_rent');
			$table->double('hh_type8_h_rent');
			$table->double('hh_type8_t_rent');
			$table->double('hh_type8_autos_rent');
			$table->double('hh_type8_vmt_rent');
			$table->double('hh_type8_transit_trips_rent');

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
		Schema::drop('census_2010_lai');
	}

}
