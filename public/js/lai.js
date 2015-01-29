function getMapData(){

	// collect selections
	var options = {
		household_type: $("#household_type").val(),
		household_title: $("#household_type option:selected").text(),
		metric: $("#metric").val(),
		metric_title: $("#metric option:selected").text()
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
	$(".form-control").prop("disabled", true);

	if($('#container').highcharts()){
		$('#container').highcharts().destroy();
	}

	$("#progress_container").clone().appendTo("#container");

	getMapData();
}

function doneLoading(response){
	drawMap(response.data, response.settings);
	$(".form-control").prop("disabled", false);
}

function drawMap(mapdata, settings){

	var countiesMap = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all-highres']),
		lines = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all-highres'], 'mapline');

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
			text : "Map"
		},

		legend: {
			layout: 'horizontal'
		},

		mapNavigation: {
			enabled: true
		},

		colorAxis: {
			tickPixelInterval: 100
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
			name: '',
			tooltip: {
				headerFormat: ''
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

	// merge the options with any specific ones sent from server
	$.extend(true, options, settings);

	// Instantiate the map
	$('#container').highcharts('Map', options);
}

$(function () {
	// register listeners for selection changes to get new map data
	$('#metric').on('change', function() {
		startLoading();
	});

	$('#household_type').on('change', function() {
		startLoading();
	});

	// load default map
	startLoading();

	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
		'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
		'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
		'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
		'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
		'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
		'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
		'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
		'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];

	// constructs the suggestion engine
	var states = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		// `states` is an array of state names defined in "The Basics"
		local: $.map(states, function(state) { return { value: state }; })
	});

	// kicks off the loading/processing of `local` and `prefetch`
	states.initialize();

	$('.typeahead').typeahead({
			hint: true,
			highlight: true,
			minLength: 1
		},
		{
			name: 'states',
			displayKey: 'value',
			// `ttAdapter` wraps the suggestion engine in an adapter that
			// is compatible with the typeahead jQuery plugin
			source: states.ttAdapter()
		});

	//$('.typeahead.input-sm').siblings('input.tt-hint').addClass('hint-small');
	//$('.typeahead.input-lg').siblings('input.tt-hint').addClass('hint-large');
});