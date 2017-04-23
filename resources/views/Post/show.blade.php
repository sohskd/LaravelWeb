@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<!-- {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!} -->
						<a href="/posts/{{ $post->id }}/edit" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> 
                        	Create New Post
                        </a>
					</div>
					<div class="col-sm-6">
						<!-- {!! Html::linkRoute('posts.destroy', 'Deletee', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} -->
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])!!}
                    	
                    	{!!Form::submit('Delete this Post!', ['class' => 'btn btn-warning'])!!}
                		{!! Form::close() !!}
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection

@section('page_level_js')

@endsection

@section('page_level_script')
    
@endsection