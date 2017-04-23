<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Post;
use App\Tweet;
//use Validator;
//use App\Http\Controllers\Controller;
//use Session;

class pagesController extends Controller
{
    //
    public function getAbout(){

        // $active = "active";
		$path = public_path();
		$sportsKML = simplexml_load_file($path . '/kml/PLAYSG.kml');
		$data = array(       
        	'sportsKML' => $sportsKML 
        );
        return view('Users.About')->with($data);
   
    }

    public function getDashboard(){
    	$posts = Post::OrderBy('created_at', 'desc')->limit(3)->get();
		$data = array(
            'posts' => $posts
        );
        return view('Users.dashboard')->with($data);
    }
	
	public function getTwitterPage(){
    	
		$tweets = Tweet::get();
		$data = array(
            'tweets' => $tweets
        );
        return view('Users.TwitterPage')->with($data);
    }
	
	
}
