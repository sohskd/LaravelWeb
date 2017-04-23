@extends('template.app')

@section('title', 'All Posts')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
    <div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
			<div>{{ Auth::getuser()}}</div>
			
			
			<div></div>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>					
					<div>{{ $posts }}</div>
					<div>{{Auth::check()}}</div>
				
					@foreach ($posts as $post)
					<!-- {{ $sportsKML->Document->Folder->Placemark->name }}
					-->
						<!--{{ $post }} -->
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td><a href="posts/{{ $post->id }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
	<button> Change User </button>
@endsection

@section('page_level_js')
@endsection

@section('page_level_script')
    
@endsection