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
    return view('Users.welcome');
    //return view('test1');
    //echo "hello";
});

Route::group(['middleware' => ['auth']], function(){
	Route::get('About', 'pagesController@getAbout');
	Route::get('dashboard', 'pagesController@getDashboard');
	Route::get('TwitterPage', 'pagesController@getTwitterPage');
	
	Route::get('showAllUsers', 'CustomiseUserController@getAllUsers');
	Route::post('showAllUsers', 'CustomiseUserController@updateAllUsers');
	
	Route::get('instaPage', 'InstagramController@processInstagramCode');
	Route::get('FlickrPage', 'InstagramController@getFlickrPage');
	Route::post('processflickrPhotoSearch', 'InstagramController@processflickrPhotoSearch');

	Route::resource('posts', 'PostController');
	//Route::resource('customers', 'PostController');
});
//Route::get('create', 'PostController@create');



Route::auth();

//Route::get('/home', 'HomeController@index');




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

