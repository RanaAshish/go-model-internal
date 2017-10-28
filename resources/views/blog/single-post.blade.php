@extends('layouts.app')





@section('content')

<div class="post-container">
	<div class="post-img">
		<a href="#"><img src="{{ $post->header_img}}" alt=""></a>
	</div>
	<div class="post-content">
		<a href=""><h3>{{$post->post_title}} </h3></a>
		<div class="meta-tags">
			<span>September 12, 2015</span>
			<span><a href="#">{{ $post->comments->count() }} Comments</a></span>
		</div>
		<div class="clearfix"></div>
		<div class="margin-bottom-25"></div>
		{!! html_entity_decode(trim($post->post_content )) !!}
	</div>
</div>	
@if($post->comments->count() > 0)
<section class="comments">
	<h4>Comments <span class="comments-amount">({{ $post->comments->count() }})</span></h4>
	<ul>
		@foreach($post->comments as $com)
			<li>
				<div class="avatar"><img src="" alt="" /></div>
				<div class="comment-content"><div class="arrow-comment"></div>
					<div class="comment-by">{{$com->user->name }}<span class="date">{{ $com->byPattern($com->created_at,'F j,  Y') }}</span>
						<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
					</div>
					<p>{!!  html_entity_decode(trim($com->content )) !!}</p>
				</div>	

			</li>
		@endforeach
		
	</ul>
</section>

@endif
	

<div class="clearfix"></div>
		<div class="margin-top-35"></div>


		<!-- Add Comment -->
		<h4 class="comment">Add Comment</h4>
		<div class="margin-top-20"></div>
		
		<!-- Add Comment Form -->
		@include('form.comment-form')


@endsection