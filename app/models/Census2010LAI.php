<?php

class Census2010LAI extends Eloquent {

	protected $table = 'census_2010_lai';
	public $incrementing = false;
	public $timestamps = false;

	public function counties(){
		return $this->belongs_to('County');
	}
}