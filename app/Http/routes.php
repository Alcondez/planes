<?php

use \Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/search', 'PagesController@search');

Route::post('/search', 'PagesController@searchFlights');

Route::get('search/passengers', 'PagesController@registerPassengers');

Route::any('getdata/{query}', function($query)
{
    $data = array();
    $results = DB::table('cities')
        ->where('name', 'LIKE',$query . '%')
        ->get();

    foreach ( $results as $result ):
        $data[] = $result->name;
    endforeach;

    //var_dump($data);
    return \Response::json($data);

});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
