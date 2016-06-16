<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home', ['pageID' => 0]);    
});

Route::get('/features', function () {
    return view('pages.features', ['pageID' => 1]);
});

Route::get('/technologies', function () {
    return view('pages.technologies', ['pageID' => 2]);
});

Route::get('/resources', function () {
    return view('pages.resources', ['pageID' => 3]);
});

Route::get('/faq', function () {
    return view('pages.faq', ['pageID' => 4]);
});

Route::get('/download', function () {
    return view('pages.download', ['pageID' => 5]);
});

Route::get('/feed/{feed}', function ($feed) {

    $feed = Feeds::make('http://blogs.cisco.com/tag/'. $feed .'/feed');

    $return = [];

    foreach ($feed->get_items(0,2) as $key => $value) {
        $return[$key]['date'] = $value->get_date('j F Y');
        $return[$key]['title'] = $value->get_title();
        $return[$key]['url'] = $value->get_link();
    }

    return Response::json($return);
});