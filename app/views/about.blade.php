@extends('layout')

@section('content')


<div>
	<div style="text-align: center; padding: 2em;">
		<h1>About</h1>
		<br>
		<br>
		<div class="alert alert-info" role="alert" style="width: 40%; margin: auto"><strong>This site is intended for demonstration purposes only.</strong></div>
		<br>
		<div style="width: 70%; margin: auto" class="text-left">

			<h3>Source Code</h3>
			<p>The source code for this site can be found on <a href="https://github.com/ryan-allison/census-maps" target="_blank">GitHub</a>.</p>
			<br>

			<h3>Data</h3>
			<p>The data used on this site is based on the 2010 Census.  It was compiled by the Department of Transportation and labelled
			as the Location Affordability Index.  It can be accessed at <a href="https://catalog.data.gov/dataset/location-affordability-index-all-census-counties" target="_blank">Data.gov</a>,
			the U.S. Government's portal for public data.</p>
			<br>

			<h3>Technology</h3>
			<p>Numerous technologies were used in the construction of this website.</p>
			<div class="list-group" style="width:50%">
				<a href="http://getbootstrap.com/" target="_blank" class="list-group-item">
					<h4 class="list-group-item-heading">Twitter Bootstrap</h4>
					<p class="list-group-item-text">Provides styling and JS widgets</p>
				</a>
				<a href="http://www.highcharts.com/" target="_blank" class="list-group-item">
					<h4 class="list-group-item-heading">Highcharts</h4>
					<p class="list-group-item-text">JS library for creating interactive charts and maps</p>
				</a>
				<a href="http://laravel.com/" target="_blank" class="list-group-item">
					<h4 class="list-group-item-heading">Laravel</h4>
					<p class="list-group-item-text">PHP Framework which provides many powerful tools for simplifying development</p>
				</a>
				<a href="http://aws.amazon.com/" target="_blank" class="list-group-item">
					<h4 class="list-group-item-heading">Amazon AWS</h4>
					<p class="list-group-item-text">Amazon Web Services are cloud-based products for virtual hosting and computing</p>
				</a>

			</div>


		</div>
	</div>
</div>

@stop