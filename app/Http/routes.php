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
    return view('Users.page_user_login_1');
    //return view('test1');
    //echo "hello";
});

Route::get('About', 'pagesController@getAbout');

Route::get('dashboard', 'pagesController@getDashboard');

//Route::get('create', 'PostController@create');

Route::resource('posts', 'PostController');





// Route::get('helloo/{name}', function($name){
// 	echo "hello there " . $name;
// });


// Route::get('customer/{id}', function($id){
// 	//echo 'testtting';
// 	 $customer = App\client::find($id);
// 	 echo '<pre>';
// 	 print_r($customer);
// });

// Route::get('des', function(){
// 	return view('test1');

// });