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

Route::get('user/registration', ['as' => 'user.create', 'middleware' => ['web'], 'uses' => 'UserController@index']);
Route::post('user/submit', ['as' => 'user.submit', 'middleware' => ['web'], 'uses' => 'UserController@store']);
Route::post('user/json', ['as' => 'user.json', 'middleware' => ['web'], 'uses' => 'UserController@userjson']);

Route::get('/setlang/{lang}', function($lang)
    {
        Session::put('locale', $lang);
        return redirect('/');
    });

Route::get('testlang', function(){

        return trans('validation.language');

    });
// Route::get('user/registration', ['as' => 'user.create', 'uses' => 'UserController@index']);
// Route::post('user/submit', ['as' => 'user.submit', 'uses' => 'UserController@store']);
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('index');
    });
});
