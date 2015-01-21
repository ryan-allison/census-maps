<?php

class Census2010LAISeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('census_2010_lai')->delete();

		// larger file, need to conserve memory, so read file by line
		$handle = fopen(base_path() . '/data/lai_data_us_counties.csv', 'r');
		$headers = array_flip(explode(",",strtoupper(trim(fgets($handle)))));

		$vals = array();
		while($line = trim(fgets($handle))){
			$vals = explode(",",$line);

			if(count($vals) == 186){
				$lai = new Census2010LAI();
				$lai->county_fips = trim($vals[$headers['COUNTY']],"'");
				$lai->county_name = trim($vals[$headers['COUNTY_NAME']],"'");
				$lai->hh_type1_income_min = $vals[$headers['HH_TYPE1_INCOME_MIN']];
				$lai->hh_type1_income_max = $vals[$headers['HH_TYPE1_INCOME_MAX']];
				$lai->hh_type1_income = $vals[$headers['HH_TYPE1_INCOME']];
				$lai->hh_type1_size = $vals[$headers['HH_TYPE1_SIZE']];
				$lai->hh_type1_workers = $vals[$headers['HH_TYPE1_WORKERS']];
				$lai->hh_type1_ht = $vals[$headers['HH_TYPE1_HT']];
				$lai->hh_type1_h = $vals[$headers['HH_TYPE1_H']];
				$lai->hh_type1_t = $vals[$headers['HH_TYPE1_T']];
				$lai->hh_type1_autos = $vals[$headers['HH_TYPE1_AUTOS']];
				$lai->hh_type1_vmt = $vals[$headers['HH_TYPE1_VMT']];
				$lai->hh_type1_transit_trips = $vals[$headers['HH_TYPE1_TRANSIT_TRIPS']];
				$lai->hh_type1_ht_own = $vals[$headers['HH_TYPE1_HT_OWN']];
				$lai->hh_type1_h_own = $vals[$headers['HH_TYPE1_H_OWN']];
				$lai->hh_type1_t_own = $vals[$headers['HH_TYPE1_T_OWN']];
				$lai->hh_type1_autos_own = $vals[$headers['HH_TYPE1_AUTOS_OWN']];
				$lai->hh_type1_vmt_own = $vals[$headers['HH_TYPE1_VMT_OWN']];
				$lai->hh_type1_transit_trips_own = $vals[$headers['HH_TYPE1_TRANSIT_TRIPS_OWN']];
				$lai->hh_type1_ht_rent = $vals[$headers['HH_TYPE1_HT_RENT']];
				$lai->hh_type1_h_rent = $vals[$headers['HH_TYPE1_H_RENT']];
				$lai->hh_type1_t_rent = $vals[$headers['HH_TYPE1_T_RENT']];
				$lai->hh_type1_autos_rent = $vals[$headers['HH_TYPE1_AUTOS_RENT']];
				$lai->hh_type1_vmt_rent = $vals[$headers['HH_TYPE1_VMT_RENT']];
				$lai->hh_type1_transit_trips_rent = $vals[$headers['HH_TYPE1_TRANSIT_TRIPS_RENT']];
				$lai->hh_type2_income_min = $vals[$headers['HH_TYPE2_INCOME_MIN']];
				$lai->hh_type2_income_max = $vals[$headers['HH_TYPE2_INCOME_MAX']];
				$lai->hh_type2_income = $vals[$headers['HH_TYPE2_INCOME']];
				$lai->hh_type2_size = $vals[$headers['HH_TYPE2_SIZE']];
				$lai->hh_type2_workers = $vals[$headers['HH_TYPE2_WORKERS']];
				$lai->hh_type2_ht = $vals[$headers['HH_TYPE2_HT']];
				$lai->hh_type2_h = $vals[$headers['HH_TYPE2_H']];
				$lai->hh_type2_t = $vals[$headers['HH_TYPE2_T']];
				$lai->hh_type2_autos = $vals[$headers['HH_TYPE2_AUTOS']];
				$lai->hh_type2_vmt = $vals[$headers['HH_TYPE2_VMT']];
				$lai->hh_type2_transit_trips = $vals[$headers['HH_TYPE2_TRANSIT_TRIPS']];
				$lai->hh_type2_ht_own = $vals[$headers['HH_TYPE2_HT_OWN']];
				$lai->hh_type2_h_own = $vals[$headers['HH_TYPE2_H_OWN']];
				$lai->hh_type2_t_own = $vals[$headers['HH_TYPE2_T_OWN']];
				$lai->hh_type2_autos_own = $vals[$headers['HH_TYPE2_AUTOS_OWN']];
				$lai->hh_type2_vmt_own = $vals[$headers['HH_TYPE2_VMT_OWN']];
				$lai->hh_type2_transit_trips_own = $vals[$headers['HH_TYPE2_TRANSIT_TRIPS_OWN']];
				$lai->hh_type2_ht_rent = $vals[$headers['HH_TYPE2_HT_RENT']];
				$lai->hh_type2_h_rent = $vals[$headers['HH_TYPE2_H_RENT']];
				$lai->hh_type2_t_rent = $vals[$headers['HH_TYPE2_T_RENT']];
				$lai->hh_type2_autos_rent = $vals[$headers['HH_TYPE2_AUTOS_RENT']];
				$lai->hh_type2_vmt_rent = $vals[$headers['HH_TYPE2_VMT_RENT']];
				$lai->hh_type2_transit_trips_rent = $vals[$headers['HH_TYPE2_TRANSIT_TRIPS_RENT']];
				$lai->hh_type3_income_min = $vals[$headers['HH_TYPE3_INCOME_MIN']];
				$lai->hh_type3_income_max = $vals[$headers['HH_TYPE3_INCOME_MAX']];
				$lai->hh_type3_income = $vals[$headers['HH_TYPE3_INCOME']];
				$lai->hh_type3_size = $vals[$headers['HH_TYPE3_SIZE']];
				$lai->hh_type3_workers = $vals[$headers['HH_TYPE3_WORKERS']];
				$lai->hh_type3_ht = $vals[$headers['HH_TYPE3_HT']];
				$lai->hh_type3_h = $vals[$headers['HH_TYPE3_H']];
				$lai->hh_type3_t = $vals[$headers['HH_TYPE3_T']];
				$lai->hh_type3_autos = $vals[$headers['HH_TYPE3_AUTOS']];
				$lai->hh_type3_vmt = $vals[$headers['HH_TYPE3_VMT']];
				$lai->hh_type3_transit_trips = $vals[$headers['HH_TYPE3_TRANSIT_TRIPS']];
				$lai->hh_type3_ht_own = $vals[$headers['HH_TYPE3_HT_OWN']];
				$lai->hh_type3_h_own = $vals[$headers['HH_TYPE3_H_OWN']];
				$lai->hh_type3_t_own = $vals[$headers['HH_TYPE3_T_OWN']];
				$lai->hh_type3_autos_own = $vals[$headers['HH_TYPE3_AUTOS_OWN']];
				$lai->hh_type3_vmt_own = $vals[$headers['HH_TYPE3_VMT_OWN']];
				$lai->hh_type3_transit_trips_own = $vals[$headers['HH_TYPE3_TRANSIT_TRIPS_OWN']];
				$lai->hh_type3_ht_rent = $vals[$headers['HH_TYPE3_HT_RENT']];
				$lai->hh_type3_h_rent = $vals[$headers['HH_TYPE3_H_RENT']];
				$lai->hh_type3_t_rent = $vals[$headers['HH_TYPE3_T_RENT']];
				$lai->hh_type3_autos_rent = $vals[$headers['HH_TYPE3_AUTOS_RENT']];
				$lai->hh_type3_vmt_rent = $vals[$headers['HH_TYPE3_VMT_RENT']];
				$lai->hh_type3_transit_trips_rent = $vals[$headers['HH_TYPE3_TRANSIT_TRIPS_RENT']];
				$lai->hh_type4_income_min = $vals[$headers['HH_TYPE4_INCOME_MIN']];
				$lai->hh_type4_income_max = $vals[$headers['HH_TYPE4_INCOME_MAX']];
				$lai->hh_type4_income = $vals[$headers['HH_TYPE4_INCOME']];
				$lai->hh_type4_size = $vals[$headers['HH_TYPE4_SIZE']];
				$lai->hh_type4_workers = $vals[$headers['HH_TYPE4_WORKERS']];
				$lai->hh_type4_ht = $vals[$headers['HH_TYPE4_HT']];
				$lai->hh_type4_h = $vals[$headers['HH_TYPE4_H']];
				$lai->hh_type4_t = $vals[$headers['HH_TYPE4_T']];
				$lai->hh_type4_autos = $vals[$headers['HH_TYPE4_AUTOS']];
				$lai->hh_type4_vmt = $vals[$headers['HH_TYPE4_VMT']];
				$lai->hh_type4_transit_trips = $vals[$headers['HH_TYPE4_TRANSIT_TRIPS']];
				$lai->hh_type4_ht_own = $vals[$headers['HH_TYPE4_HT_OWN']];
				$lai->hh_type4_h_own = $vals[$headers['HH_TYPE4_H_OWN']];
				$lai->hh_type4_t_own = $vals[$headers['HH_TYPE4_T_OWN']];
				$lai->hh_type4_autos_own = $vals[$headers['HH_TYPE4_AUTOS_OWN']];
				$lai->hh_type4_vmt_own = $vals[$headers['HH_TYPE4_VMT_OWN']];
				$lai->hh_type4_transit_trips_own = $vals[$headers['HH_TYPE4_TRANSIT_TRIPS_OWN']];
				$lai->hh_type4_ht_rent = $vals[$headers['HH_TYPE4_HT_RENT']];
				$lai->hh_type4_h_rent = $vals[$headers['HH_TYPE4_H_RENT']];
				$lai->hh_type4_t_rent = $vals[$headers['HH_TYPE4_T_RENT']];
				$lai->hh_type4_autos_rent = $vals[$headers['HH_TYPE4_AUTOS_RENT']];
				$lai->hh_type4_vmt_rent = $vals[$headers['HH_TYPE4_VMT_RENT']];
				$lai->hh_type4_transit_trips_rent = $vals[$headers['HH_TYPE4_TRANSIT_TRIPS_RENT']];
				$lai->hh_type5_income_min = $vals[$headers['HH_TYPE5_INCOME_MIN']];
				$lai->hh_type5_income_max = $vals[$headers['HH_TYPE5_INCOME_MAX']];
				$lai->hh_type5_income = $vals[$headers['HH_TYPE5_INCOME']];
				$lai->hh_type5_size = $vals[$headers['HH_TYPE5_SIZE']];
				$lai->hh_type5_workers = $vals[$headers['HH_TYPE5_WORKERS']];
				$lai->hh_type5_ht = $vals[$headers['HH_TYPE5_HT']];
				$lai->hh_type5_h = $vals[$headers['HH_TYPE5_H']];
				$lai->hh_type5_t = $vals[$headers['HH_TYPE5_T']];
				$lai->hh_type5_autos = $vals[$headers['HH_TYPE5_AUTOS']];
				$lai->hh_type5_vmt = $vals[$headers['HH_TYPE5_VMT']];
				$lai->hh_type5_transit_trips = $vals[$headers['HH_TYPE5_TRANSIT_TRIPS']];
				$lai->hh_type5_ht_own = $vals[$headers['HH_TYPE5_HT_OWN']];
				$lai->hh_type5_h_own = $vals[$headers['HH_TYPE5_H_OWN']];
				$lai->hh_type5_t_own = $vals[$headers['HH_TYPE5_T_OWN']];
				$lai->hh_type5_autos_own = $vals[$headers['HH_TYPE5_AUTOS_OWN']];
				$lai->hh_type5_vmt_own = $vals[$headers['HH_TYPE5_VMT_OWN']];
				$lai->hh_type5_transit_trips_own = $vals[$headers['HH_TYPE5_TRANSIT_TRIPS_OWN']];
				$lai->hh_type5_ht_rent = $vals[$headers['HH_TYPE5_HT_RENT']];
				$lai->hh_type5_h_rent = $vals[$headers['HH_TYPE5_H_RENT']];
				$lai->hh_type5_t_rent = $vals[$headers['HH_TYPE5_T_RENT']];
				$lai->hh_type5_autos_rent = $vals[$headers['HH_TYPE5_AUTOS_RENT']];
				$lai->hh_type5_vmt_rent = $vals[$headers['HH_TYPE5_VMT_RENT']];
				$lai->hh_type5_transit_trips_rent = $vals[$headers['HH_TYPE5_TRANSIT_TRIPS_RENT']];
				$lai->hh_type6_income_min = $vals[$headers['HH_TYPE6_INCOME_MIN']];
				$lai->hh_type6_income_max = $vals[$headers['HH_TYPE6_INCOME_MAX']];
				$lai->hh_type6_income = $vals[$headers['HH_TYPE6_INCOME']];
				$lai->hh_type6_size = $vals[$headers['HH_TYPE6_SIZE']];
				$lai->hh_type6_workers = $vals[$headers['HH_TYPE6_WORKERS']];
				$lai->hh_type6_ht = $vals[$headers['HH_TYPE6_HT']];
				$lai->hh_type6_h = $vals[$headers['HH_TYPE6_H']];
				$lai->hh_type6_t = $vals[$headers['HH_TYPE6_T']];
				$lai->hh_type6_autos = $vals[$headers['HH_TYPE6_AUTOS']];
				$lai->hh_type6_vmt = $vals[$headers['HH_TYPE6_VMT']];
				$lai->hh_type6_transit_trips = $vals[$headers['HH_TYPE6_TRANSIT_TRIPS']];
				$lai->hh_type6_ht_own = $vals[$headers['HH_TYPE6_HT_OWN']];
				$lai->hh_type6_h_own = $vals[$headers['HH_TYPE6_H_OWN']];
				$lai->hh_type6_t_own = $vals[$headers['HH_TYPE6_T_OWN']];
				$lai->hh_type6_autos_own = $vals[$headers['HH_TYPE6_AUTOS_OWN']];
				$lai->hh_type6_vmt_own = $vals[$headers['HH_TYPE6_VMT_OWN']];
				$lai->hh_type6_transit_trips_own = $vals[$headers['HH_TYPE6_TRANSIT_TRIPS_OWN']];
				$lai->hh_type6_ht_rent = $vals[$headers['HH_TYPE6_HT_RENT']];
				$lai->hh_type6_h_rent = $vals[$headers['HH_TYPE6_H_RENT']];
				$lai->hh_type6_t_rent = $vals[$headers['HH_TYPE6_T_RENT']];
				$lai->hh_type6_autos_rent = $vals[$headers['HH_TYPE6_AUTOS_RENT']];
				$lai->hh_type6_vmt_rent = $vals[$headers['HH_TYPE6_VMT_RENT']];
				$lai->hh_type6_transit_trips_rent = $vals[$headers['HH_TYPE6_TRANSIT_TRIPS_RENT']];
				$lai->hh_type7_income_min = $vals[$headers['HH_TYPE7_INCOME_MIN']];
				$lai->hh_type7_income_max = $vals[$headers['HH_TYPE7_INCOME_MAX']];
				$lai->hh_type7_income = $vals[$headers['HH_TYPE7_INCOME']];
				$lai->hh_type7_size = $vals[$headers['HH_TYPE7_SIZE']];
				$lai->hh_type7_workers = $vals[$headers['HH_TYPE7_WORKERS']];
				$lai->hh_type7_ht = $vals[$headers['HH_TYPE7_HT']];
				$lai->hh_type7_h = $vals[$headers['HH_TYPE7_H']];
				$lai->hh_type7_t = $vals[$headers['HH_TYPE7_T']];
				$lai->hh_type7_autos = $vals[$headers['HH_TYPE7_AUTOS']];
				$lai->hh_type7_vmt = $vals[$headers['HH_TYPE7_VMT']];
				$lai->hh_type7_transit_trips = $vals[$headers['HH_TYPE7_TRANSIT_TRIPS']];
				$lai->hh_type7_ht_own = $vals[$headers['HH_TYPE7_HT_OWN']];
				$lai->hh_type7_h_own = $vals[$headers['HH_TYPE7_H_OWN']];
				$lai->hh_type7_t_own = $vals[$headers['HH_TYPE7_T_OWN']];
				$lai->hh_type7_autos_own = $vals[$headers['HH_TYPE7_AUTOS_OWN']];
				$lai->hh_type7_vmt_own = $vals[$headers['HH_TYPE7_VMT_OWN']];
				$lai->hh_type7_transit_trips_own = $vals[$headers['HH_TYPE7_TRANSIT_TRIPS_OWN']];
				$lai->hh_type7_ht_rent = $vals[$headers['HH_TYPE7_HT_RENT']];
				$lai->hh_type7_h_rent = $vals[$headers['HH_TYPE7_H_RENT']];
				$lai->hh_type7_t_rent = $vals[$headers['HH_TYPE7_T_RENT']];
				$lai->hh_type7_autos_rent = $vals[$headers['HH_TYPE7_AUTOS_RENT']];
				$lai->hh_type7_vmt_rent = $vals[$headers['HH_TYPE7_VMT_RENT']];
				$lai->hh_type7_transit_trips_rent = $vals[$headers['HH_TYPE7_TRANSIT_TRIPS_RENT']];
				$lai->hh_type8_income_min = $vals[$headers['HH_TYPE8_INCOME_MIN']];
				$lai->hh_type8_income_max = $vals[$headers['HH_TYPE8_INCOME_MAX']];
				$lai->hh_type8_income = $vals[$headers['HH_TYPE8_INCOME']];
				$lai->hh_type8_size = $vals[$headers['HH_TYPE8_SIZE']];
				$lai->hh_type8_workers = $vals[$headers['HH_TYPE8_WORKERS']];
				$lai->hh_type8_ht = $vals[$headers['HH_TYPE8_HT']];
				$lai->hh_type8_h = $vals[$headers['HH_TYPE8_H']];
				$lai->hh_type8_t = $vals[$headers['HH_TYPE8_T']];
				$lai->hh_type8_autos = $vals[$headers['HH_TYPE8_AUTOS']];
				$lai->hh_type8_vmt = $vals[$headers['HH_TYPE8_VMT']];
				$lai->hh_type8_transit_trips = $vals[$headers['HH_TYPE8_TRANSIT_TRIPS']];
				$lai->hh_type8_ht_own = $vals[$headers['HH_TYPE8_HT_OWN']];
				$lai->hh_type8_h_own = $vals[$headers['HH_TYPE8_H_OWN']];
				$lai->hh_type8_t_own = $vals[$headers['HH_TYPE8_T_OWN']];
				$lai->hh_type8_autos_own = $vals[$headers['HH_TYPE8_AUTOS_OWN']];
				$lai->hh_type8_vmt_own = $vals[$headers['HH_TYPE8_VMT_OWN']];
				$lai->hh_type8_transit_trips_own = $vals[$headers['HH_TYPE8_TRANSIT_TRIPS_OWN']];
				$lai->hh_type8_ht_rent = $vals[$headers['HH_TYPE8_HT_RENT']];
				$lai->hh_type8_h_rent = $vals[$headers['HH_TYPE8_H_RENT']];
				$lai->hh_type8_t_rent = $vals[$headers['HH_TYPE8_T_RENT']];
				$lai->hh_type8_autos_rent = $vals[$headers['HH_TYPE8_AUTOS_RENT']];
				$lai->hh_type8_vmt_rent = $vals[$headers['HH_TYPE8_VMT_RENT']];
				$lai->hh_type8_transit_trips_rent = $vals[$headers['HH_TYPE8_TRANSIT_TRIPS_RENT']];

				$lai->save();
			}
		}
		fclose($handle);
	}

}
