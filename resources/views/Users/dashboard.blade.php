@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
    
@endsection

@section('head')
    
@endsection

@section('content')
    <center><h1>Template</h1></center>
    <div class="row">
    	@foreach ($posts as $posts)
    	<div class = "post">
    		<h3>{{$posts->title}}</h3>
    		<p>
    			{{$posts->body}}
    		</p>
    	</div> 
    	@endforeach	  	
    </div>
@endsection

@section('page_level_js')
    
@endsection

@section('page_level_script')
    
@endsection