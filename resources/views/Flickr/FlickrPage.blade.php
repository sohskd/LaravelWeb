@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
<?php include(app_path().'/php/imageClass.php') ?>
<form action="/processflickrPhotoSearch" method="post">
	Lat: <input type="text" name="Lat"><br>
	Lon: <input type="text" name="Lon"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
</form>

@foreach ($image as $image1)
	<img src="{{$image1}}" width="100" height="100">
@endforeach

@endsection

@section('page_level_js')
    
@endsection

@section('page_level_script')
    
@endsection