<?php

class CountyListController extends BaseController {

	static private function getCounties(){
		$counties = County::all();

		$data_arr = array();
		foreach($counties as $county){
			$county_n_state = $county->county_name . ", " .$county->state;
			$data_arr[$county_n_state] = array("state" => $county->state, "fips" => $county->county_fips);
		}

		return $data_arr;
	}

	public function responseJSON(){
		//return Response::json($this->getCounties());
		return Response::json(CountyListController::getCounties());
	}

	static public function printJSON(){
		echo json_encode(CountyListController::getCounties());
	}
}