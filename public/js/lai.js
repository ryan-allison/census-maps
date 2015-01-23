function getMapData(){

	// collect selections
	var options = {
		household_type: $("#household_type").val(),
		metric: $("#metric").val()
	}

	// get the data from server
	$.ajax({
		url: 'mapData',
		data: options
	})
	.done(function(response){
		doneLoading(response);
	});
}

function startLoading(){
	if($('#container').highcharts()){
		$('#container').highcharts().destroy();
	}

	$('#submit').button('loading');
	$(".progress").clone().appendTo("#container");

	getMapData();
}

function doneLoading(response){
	drawMap(response.data, response.settings);
	$('#submit').button('reset');
}

function drawMap(mapdata, settings){

	var countiesMap = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all']),
		lines = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all'], 'mapline');

	// Add state acronym for tooltip
	Highcharts.each(countiesMap, function (mapPoint) {
		mapPoint.name = mapPoint.name + ', ' + mapPoint.properties['hc-key'].substr(3, 2).toUpperCase();
	});


	var options = {
		chart : {
			borderWidth : 0,
			marginRight: 50 // for the legend
		},

		title : {
			text : 'Median Income for Median-Income Families by County'
		},

		legend: {
			layout: 'horizontal'
		},

		mapNavigation: {
			enabled: true
		},

		colorAxis: {
			min: 30000,
			max: 90000
		},

		plotOptions: {
			mapline: {
				showInLegend: false,
				enableMouseTracking: false
			}
		},

		series : [{
			mapData : countiesMap,
			data: mapdata,
			joinBy: ['fips', 'county_code'],
			name: 'Median Income',
			tooltip: {
				//pointFormat: "{series.color} {point.name}: {point.value}<br/>",
				valuePrefix: '$'
			},
			borderWidth: 0.5,
			states: {
				hover: {
					color: '#bada55'
				}
			}
		}, {
			type: 'mapline',
			name: 'State borders',
			data: [lines[0]],
			color: 'white'
		}, {
			type: 'mapline',
			name: 'Separator',
			data: [lines[1]],
			color: 'gray'
		}]
	};

	// Instantiate the map
	$('#container').highcharts('Map', options);
}

$(function () {

	// register listener for button to get new map data and load default map
	$('#submit').on('click', function () {
		startLoading();
	}).trigger('click');;
});