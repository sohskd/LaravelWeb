<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    //
    public function getAbout(){

        // $active = "active";

       

    	return view('Users.About');
    	 
    }

    public function getDashboard(){
    	return view('Users.dashboard');  
    }
}
