<?php

// Views

Route::get('/', function() {
	return View::make('lai');
});

Route::get('about', function() {
	return View::make('about');
});

Route::get('contact', function() {
	return View::make('contact');
});


// API calls

Route::get('api/mapData', 'MapDataController@responseJSON');

Route::get('api/countyList', 'CountyListController@responseJSON');