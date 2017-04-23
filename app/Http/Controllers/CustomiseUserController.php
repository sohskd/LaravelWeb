<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;


class CustomiseUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllUsers()
    {
        //
        $users = Auth::user()->all();
		$data = array(       
        	'users' => $users
        );
        return view('Users.showAllUsers')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAllUsers(Request $request)
    {
        //
        // Save the data to the database
        
        
		$users = Auth::user()->all();
		
		/*
		$user->role = $request->input('title');
		
		$user->save();*/
		//$data = Input::has('published') ? true : false;
		foreach ($users as $user) {
			$checked = $request->input($user->id);
			//echo $checked;
			echo isset($_POST[$user->id]);
			if($checked){
				$user->role = 'admin';	
				$user->save();
			}
			else{
				$user->role = 'user';
				$user->save();
			}   		
    		//echo $user->email;
		}
		
		$path = $request->name;
		
		Session::flash('success', 'your configuration has been saved');
		//return $user;
		return redirect('showAllUsers');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
