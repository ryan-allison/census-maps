<?php

class CountyListController extends BaseController {

	public function getJSON(){
		$counties = County::all();

		$data_arr = array();
		foreach($counties as $county){
			$data_arr[] = array("name" => $county->county_name, "state" => $county->state);
		}

		return Response::json($data_arr);
	}
}