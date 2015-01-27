<?php

class MapDataController extends BaseController {
	private $_percentage_metrics = array("h", "t");

	public function getJSON(){
		$household_type = Input::get("household_type");
		$household_title = Input::get("household_title");
		$metric = Input::get("metric");
		$metric_title = Input::get("metric_title");

		$data_arr = array();
		$min = 100000000;
		$max = 0;
		Census2010LAI::chunk(200, function($lais) use (&$data_arr, $household_type, $metric, &$min, &$max){
			$property = $household_type . $metric;
			$income = $household_type . "income";
			foreach($lais as $lai){
				if(!isset($lai->$property)){
					throw new Exception("Invalid data column");
				}
				if(in_array($metric,$this->_percentage_metrics)){
					$value = round($lai->$income * ($lai->$property / 100));
				} else if(is_int($lai->$property)){
					$value = $lai->$property;
				} else {
					$value = round($lai->$property,2);
				}

				if(($value < $min) && ($value > 0)){
					$min = $value;
				}

				if($value > $max){
					$max = $value;
				}

				$data_arr[] = array("county_code" => $lai->county_fips, "value" => $value);
			}
		});

		// define conditional chart settings
		if($household_type == "hh_type1_"){
			$color = '#096060';
		} else if($household_type == "hh_type2_"){
			$color = '#9F510F';
		} else if($household_type == "hh_type3_"){
			$color = '#0C800C';
		} else if($household_type == "hh_type4_"){
			$color = '#9F0F0F';
		} else if($household_type == "hh_type5_"){
			$color = '#132A77';
		} else if($household_type == "hh_type6_"){
			$color = '#CB9323';
		} else if($household_type == "hh_type7_"){
			$color = '#4A0F6B';
		} else if($household_type == "hh_type8_"){
			$color = '#9F870F';
		} else {
			$color = '#102D4C';
		}

		$map_settings =	array(
			"colorAxis" => array(
				"min" => $min,
				"max" => $max,
				"minColor" => "#FFFFFF",
				"maxColor" => $color
			)
		);

		if(in_array($metric, array("income","h","t"))){
			$map_settings["series"] = array(array(
								  "tooltip" => array(
									  "valuePrefix" => '$'
								  )));
		}

		$map_settings["title"] = array("text" => "$metric_title for $household_title by County");

		return Response::json(array("data" => $data_arr, "settings" => $map_settings));
	}

}
