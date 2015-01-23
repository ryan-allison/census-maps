<?php

class MapDataController extends BaseController {

	public function getJSON(){
		$household_type = Input::get("household_type");
		$metric = Input::get("metric");
		$property = $household_type . $metric;

		$arr = array();
		Census2010LAI::chunk(200, function($lais) use (&$arr, $property){
			foreach($lais as $lai){
				if(!isset($lai->$property)){
					throw new Exception("Invalid data column");
				}
				$arr[] = array("county_code" => $lai->county_fips, "value" => $lai->$property);
			}
		});

		return Response::json(array("data" => $arr, "settings" => array()));
	}

}
