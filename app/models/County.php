<?php

class County extends Eloquent {

	protected $table = 'census_counties';
	public $incrementing = false;
	public $timestamps = false;

	public function census2010LAI(){
		$this->has_one('Census2010LAI');
	}
}