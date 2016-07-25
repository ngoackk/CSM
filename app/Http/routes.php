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

// Route::get('/', function () {
//     return view('desk_view');
// });

Route::get('/','DeskOrderController@index'); 
Route::get('/insert','InsertProductController@insertform'); 
Route::get('/imgupload','InsertProductController@imgupload');  

Route::get('users/{name}',function($name)
{

	return 'Tên: '.$name ;

	});
// Route::get('role',[

// 	'middleware' =>'Role:editor', 
// 	'uses' =>'TestController@index',

// 	]);
Route::get('/role','TestController@index');

Route::get('productshow','ProductShowController@index'); 
Route::resource('create','InsertProductController@insert');



	);

