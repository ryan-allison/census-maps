<?php

class MapDataController extends BaseController {

	public function getJSON()
	{
		$arr = array();
		Census2010LAI::chunk(200, function($lais) use (&$arr){
			foreach($lais as $lai){

				$arr[] = array("county_code" => $lai->county_fips);
			}
		});

		return Response::json($arr);
	}

}
