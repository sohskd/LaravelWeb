@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
    <center><h1>Template</h1></center>
    <form action="/showAllUsers" method="post">
    	@foreach ($users as $user)
    		<input type="checkbox" name="{{ $user->id }}" value="1" <?php if($user->role == 'admin') echo "checked='checked'"; ?>>{{ $user->name }}<br>
    	@endforeach
    	<input type="submit" value="submit">
    	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </form>
    <div></div>
@endsection

@section('page_level_js')
    
@endsection

@section('page_level_script')
    
@endsection