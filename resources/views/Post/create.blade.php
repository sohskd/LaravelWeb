@extends('template.app')

@section('title', 'des')

@section('page_level_style')
	
@endsection

@section('head')
    
@endsection

@section('content')
<div class="blog-page blog-content-2">
    <div class="row">
        <div class="col-lg-9">
            <div class="blog-single-content bordered blog-container">
				<div class="blog-comments">
				    <h3 class="sbold blog-comments-title">Leave A Comment</h3>
				    <form method="post" action='.' >
				        <div class="form-group">
				            <input name="title" type="text" placeholder="Your Name" class="form-control c-square"> </div>				       
				        <div class="form-group">
				            <textarea name="body" rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
				        </div>
				        <div class="form-group">
				            <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
				        </div>
				        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    </form> 				   
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