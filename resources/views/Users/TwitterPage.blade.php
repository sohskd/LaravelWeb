@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
    <table class="table">
		<thead>
			<th>Tweeter Profile</th>
			<th>Tweeter User</th>
			<th>Description</th>
		</thead>

		<tbody>					
			@foreach ($tweets as $tweet)
				<tr>
					<th><img src="{{ $tweet->user_avatar_url }}" alt="Twitter Images" style="width:100px;height:100px;"></th>
					<td>{{ $tweet->user_screen_name }}</td>
					<td>{{ $tweet->tweet_text }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection

@section('page_level_js')
    
@endsection

@section('page_level_script')
    
@endsection