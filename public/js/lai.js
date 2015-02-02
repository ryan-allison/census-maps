
function searchBoxInit(){
	// need an array of strings for the suggestion engine
	var strings = [];
	$.each(counties, function(i){
		strings.push(i);
	});

	// constructs the suggestion engine
	var sugg_engine = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		local: $.map(strings, function(county) { return { value: county }; })
	});

	// kicks off the loading/processing of `local` and `prefetch`
	sugg_engine.initialize();

	// configure the Typeahead text field
	$('.typeahead')
		.typeahead({
			hint: true,
			highlight: true,
			minLength: 1,
			autoselect: true
		},
		{
			name: 'strings',
			displayKey: 'value',
			// `ttAdapter` wraps the suggestion engine in an adapter that
			// is compatible with the typeahead jQuery plugin
			source: sugg_engine.ttAdapter()
		})
		.on("typeahead:selected", function(){
			// when an item is selected, call zoom function
			zoomToCounty();
		});
}

function zoomToCounty(){
	// get the value in the search box the user entered
	var searched = $("#search_box").val();

	// lookup the fips identification code for searched county
	var target_fips = counties[searched].fips;

	// zoom to target county, then zoom out a little (for looks)
	var highchart = $('#container').highcharts();
	highchart.get(target_fips).zoomTo();
	highchart.mapZoom(5);

	// select the county so its more visible
	if(!highchart.get(target_fips).selected){
		highchart.get(target_fips).select();
	}
}

function startMapDataLoading(){
	// prevent any changes to inputs while loading
	$(".form-control").prop("disabled", true);

	// get rid of current highcharts object
	if($('#container').highcharts()){
		$('#container').highcharts().destroy();
	}

	// show loading animation
	$("#progress_container").clone().appendTo("#container");

	// collect selections
	var options = {
		household_type: $("#household_type").val(),
		household_title: $("#household_type option:selected").text(),
		metric: $("#metric").val(),
		metric_title: $("#metric option:selected").text()
	}

	// get the data from server
	$.ajax({
		url: 'api/mapData',
		data: options
	}).done(function(response){
		// response received from server
		doneMapDataLoading(response);
	});
}

function doneMapDataLoading(response){
	// draw the map with server response data
	drawMap(response.data, response.settings);

	// re-enable the inputs
	$(".form-control").prop("disabled", false);

	// if a county had been selected before, re-zoom to it
	var search_target = $("#search_box").val();
	if(search_target != ""){
		zoomToCounty();
	}
}

function drawMap(mapdata, settings){

	// Assign ids
	$.each(mapdata, function () {
		this.id = this.county_code;
	});

	// init the GeoJSON based maps
	var countiesMap = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all-highres']),
		lines = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all-highres'], 'mapline');

	// add state acronym for tooltip
	Highcharts.each(countiesMap, function (mapPoint) {
		mapPoint.name = mapPoint.name + ', ' + mapPoint.properties['hc-key'].substr(3, 2).toUpperCase();
	});

	// configure chart settings
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
			},
			series: {
				point: {
					events: {
						select: function(e){
							$("#search_box").val(this.fullname);
						}
					}
				}
			}
		},

		series : [{
			mapData : countiesMap,
			data: mapdata,
			joinBy: ['fips', 'county_code'],
			name: '',
			allowPointSelect: true,
			tooltip: {
				headerFormat: '',
				pointFormat: '{point.fullname}: {point.value}<br/>'
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
		startMapDataLoading();
	});

	$('#household_type').on('change', function() {
		startMapDataLoading();
	});

	// load default map
	startMapDataLoading();

	// init search box and suggestion engine
	searchBoxInit();

	// init Reset button to return zoom and search box to default
	$("#reset_button").on("click", function(){
		$("#search_box").val("");
		$('#container').highcharts().mapZoom(500);
		var arr = $('#container').highcharts().getSelectedPoints();
		if(typeof arr[0] != "undefined"){
			arr[0].select();
		}
	});
});