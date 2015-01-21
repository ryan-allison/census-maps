@extends('layout')

@section('content')


	<h1>Census 2010 LAI</h1>
	<br>


	<div id="container" style="height: 520px; min-width: 310px; width: 800px; margin: 0 auto; text-align:center; line-height: 520px">
		Downloading map...
	</div>

	<script src="http://code.highcharts.com/maps/highmaps.js"></script>
	<script src="http://code.highcharts.com/maps/modules/data.js"></script>
	<script src="http://code.highcharts.com/maps/modules/exporting.js"></script>
	<script src="http://code.highcharts.com/mapdata/countries/us/us-all-all.js"></script>

	{{-- javascript for generating the map --}}
	{{ HTML::script('js/highmap.js') }}


@stop