<?php

class CountyListController extends BaseController {

	static private function getCounties(){
		// get all the counties from DB
		$counties = County::all();

		// build associative array of counties
		$data_arr = array();
		foreach($counties as $county){
			$county_n_state = $county->county_name . ", " .$county->state;
			$data_arr[$county_n_state] = array("fips" => $county->county_fips);
		}

		return $data_arr;
	}

	public function responseJSON(){
		// get all the counties, encode as JSON, and respond to client
		return Response::json(CountyListController::getCounties());
	}

	static public function printJSON(){
		// get all the counties, encode as json, and echo
		echo json_encode(CountyListController::getCounties());
	}
}