@extends('layout')

@section('content')


	<div>
		<div style="text-align: center; padding: 2em;">
			<h1>Census 2010: Location Affordability Index</h1>
		</div>


		<div class="col-md-3">
			Household Type
			<select class="form-control" id="household_type">
				<option value="hh_type1_" selected>Median-Income Family</option>
				<option value="hh_type2_">Very Low-Income Individual</option>
				<option value="hh_type3_">Working Individual</option>
				<option value="hh_type4_">Single Professional</option>
				<option value="hh_type5_">Retired Couple</option>
				<option value="hh_type6_">Single-Parent Family</option>
				<option value="hh_type7_">Moderate-Income Family</option>
				<option value="hh_type8_">Dual-Professional Family</option>
			</select>
			<br>
			<br>
			Data to View
			<select class="form-control" id="metric">
				<option value="income" selected>Income</option>
				<option value="h">Housing Costs</option>
				<option value="t">Transportation Costs</option>
				<option value="autos">Cars per Household</option>
				<option value="vmt">Annual Vehicle Miles Traveled</option>
			</select>
			<br>
			<br>
			<button type="button" id="submit" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
				Load
			</button>
		</div>
		<div class="col-md-9">
			<div id="container" style="height: 520px; min-width: 310px; width: 800px; margin: 0 auto; text-align:center; line-height: 520px">
			</div>

		</div>




	</div>

	<div style="visibility: hidden">

		<div class="progress" style="margin: 10em">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			</div>
		</div>
	</div>

	<script src="http://code.highcharts.com/maps/highmaps.js"></script>
	<script src="http://code.highcharts.com/maps/modules/data.js"></script>
	<script src="http://code.highcharts.com/maps/modules/exporting.js"></script>
	<script src="http://code.highcharts.com/mapdata/countries/us/us-all-all-highres.js"></script>

	{{-- javascript for generating the map --}}
	{{ HTML::script('js/lai.js') }}


@stop