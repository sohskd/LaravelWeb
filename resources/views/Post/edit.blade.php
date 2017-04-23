@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
    
@endsection

@section('head')
    
@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <input name="title" type="hidden" class="form-control" value={{$post->title}}> 
            <textarea name="body" class="form-control" rows="5" placeholder="">{{ $post->body }}</textarea>
            <label class="help-block font-xs">Tell us more about your event</label>           
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
                        <a href="/posts" class="btn btn-primary danger btn-block"> 
                            Cancel
                        </a>
                    </div>
                    <div class="col-sm-6">
                    	{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
                        <!--{!! Html::linkRoute('posts.update', 'Save', array($post->id), array('class' => 'btn btn-success btn-block')) !!}-->
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