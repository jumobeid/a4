<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('cms.index');
});
Route::resource('tasks','TaskController');
Route::get('/rand','randomTaskController@show');
Route::post('/rand','randomTaskController@edit');

//Route::get('/submitted', 'cmsController@show');
//Route::post('/submitted', 'cmsController@submitted');


if(config('app.env') == 'local') {
    #Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');
