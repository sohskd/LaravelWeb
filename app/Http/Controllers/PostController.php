<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Validator;
use App\Http\Controllers\Controller;
use Session;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Show all the posts
    public function index()
    {
        //
        $user = Auth::user();
		$path = public_path();
		$sportsKML = simplexml_load_file($path . '/kml/PLAYSG.kml');
        $posts = $user->getPostByUser()->orderBy('id', 'desc')->paginate(3);
        $data = array(       
        	'sportsKML' => $sportsKML, 
            'posts' => $posts,
        );
        return view('Post.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the data
        $this->Validate($request, array(
            'title'=>'required|max:255',
            'body'=>'required'
            ));

        //Store the data into the database
        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
		$post->user_id = Auth::user()->id;
        $post->save();

        Session::flash('success', 'your post has been successfully added! yay!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = array(
            'post' => $post
        );

        return view('Post.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the posts in database and save as variable
        $post = Post::find($id);
        $data = array(
            'post' => $post
        );
        // //return the view and pass in variable previously created
        return view('Post.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
		$this->Validate($request, array(
            'title'=>'required|max:255',
            'body'=>'required'
            ));
        // Save the data to the database
		$post = Post::find($id);
		
		$post->title = $request->input('title');
		$post->body = $request->input('body');
		
		$post->save();
        // Set flash data with success message
		 Session::flash('success', 'your post has been successfully saved! yay!');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
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
        $post = Post::find($id);
        $post->delete();

        // redirect
        Session::flash('success', 'Successfully deleted the post!');
        return Redirect()->route('posts.index');
    }
}
