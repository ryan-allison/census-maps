<?php

class CensusCountiesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('census_counties')->delete();

		$lines = explode("\r\n",file_get_contents(base_path() . '/data/national_county.csv'));
		$headers = array_flip(explode(",",strtoupper(array_shift($lines))));

		foreach($lines as $line){
			$vals = explode(",",$line);

			$county = new County;
			$county->state = $vals[$headers['STATE']];
			$county->state_ansi = $vals[$headers['STATE ANSI']];
			$county->county_ansi = $vals[$headers['COUNTY ANSI']];
			$county->county_name = $vals[$headers['COUNTY NAME']];
			$county->ansi_cl = $vals[$headers['ANSI CL']];

			$county->save();
		}

	}

}
