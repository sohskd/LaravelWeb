<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InstagramController extends Controller
{
    //
    public function processInstagramCode(Request $request){
    	
		 $url = 'https://api.instagram.com/oauth/access_token';	
		 $client_id = '4ffe9786b63e40f4854d767be45b9ea0';
		 $client_secret = '8b8ca3f5b4664777985f93a8ca38f4da';
		 //$grant_type = 'authorization_code';
		 $redirect_uri='http://localhost:8000/instaPage';
		 $code= $_GET['code'];
		 
		 $data = array(       
        	'client_id' => $client_id,
        	'client_secret' => $client_secret,
        	'grant_type' => 'authorization_code',
        	'redirect_uri' => $redirect_uri,
        	'code' => $code,
         );
		 
		 $ch = curl_init($url);
		 //curl_setopt($ch, CURLOPT_URL, $url);
		 curl_setopt($ch, CURLOPT_POST, true);
		 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		 
		 $output = curl_exec($ch);
		 //$obj = json_decode($output, true );
		 $parsedJson = json_decode($output);
		 $access_token = $parsedJson->access_token;
		 echo $access_token;
		 //echo $output;
		 if($output === FALSE){
		 	echo "cURL Error: " . curl_error($ch);
		 } 
		 
		 curl_close($ch);
		  
		 $outputData = array(   
		 	'output' => $output
		 );
		 
    	 return view('Instagram.instaPage')->with($outputData);
    	 
    	 /////////////////////////////////////////////////////////
    	 
    	 /*$access_token = $_GET['access_token'];
		 $outputData = array(   
		 	'output' => $access_token
		 );*/
		 
		 
    	 /*$url=parse_url("http://localhost:8000/instaPage#access_token=803450264.4ffe978.8ac7c8d0497544978c90953cac684f2c");
			//echo $url["fragment"];
			$str = $url["fragment"];
			$str2 = substr($str, 13);
			echo $str2;
    	 return view('Instagram.instaPage');*/
    }
	public function getFlickrPage(){
		$flickrOutput = '5';
		$image = array('500');
	    $outputFlickrData = array(   
		 	'flickrOutput' => $flickrOutput,
		 	'image' => $image
		 );
		return view('Flickr.FlickrPage')->with($outputFlickrData);
	}

	public function processflickrPhotoSearch(Request $request){
		
		//echo 'hello world'; 
		//echo $request->input('Lat');
		//echo $request->input('Lon');
		//$lat = '1.324379';
		//$lon = '103.851082';
		
		$lat = $request->input('Lat');
		$lon = $request->input('Lon');
		
		/*$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=46d33b4496a7b596b886b84cdb698ae0&
		lat=' . $lat . '&lon=' . $lon 
		. '&format=json&nojsoncallback=1&auth_token=72157681220618626-af084e3e9b33685b&api_sig=1d5904f930c7973f8162ede7131dc3a6';*/
		
		$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=0af20797a13c65404a48cbccdd7d6e24&lat='.$lat.'&lon='.$lon.'&format=json&nojsoncallback=1';
		//echo $url;
		
		/*$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);	 
		$flickrOutput = curl_exec($ch);	*/
		
	    $flickrOutput = file_get_contents($url);
		$a = 'https://farm1.staticflickr.com/2/1418878_1e92283336_m.jpg';
		$b = 'https://farm1.staticflickr.com/656/33007332980_cc2ceb8004_m.jpg';
		$image = array();
		//print_r($image);
		$parsedJson = json_decode($flickrOutput);
		
		
		/*if($flickrOutput === FALSE){
		 	echo "cURL Error: " . curl_error($ch);
		 }*/ 
		 
		for($i = 0; $i < count($parsedJson->photos->photo); $i++){
			$farm_id = $parsedJson->photos->photo[$i]->farm;
			$server_id = $parsedJson->photos->photo[$i]->server;
			$photo_id = $parsedJson->photos->photo[$i]->id;
			$secret = $parsedJson->photos->photo[$i]->secret;
			$httpUrl = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' .
			$photo_id . '_' . $secret . '_m.jpg';
	
			array_push($image, $httpUrl);
		}
		
		
		//echo $parsedJson->photos->photo[0]->secret;
		//echo $$parsedJson->photos->photo.size();
		
		//curl_close($ch);
		
		$outputFlickrData = array(   
		 	'flickrOutput' => $flickrOutput,
		 	'image' => $image
		 );
		 
    	 return view('Flickr.FlickrPage')->with($outputFlickrData);

	
    }
}
