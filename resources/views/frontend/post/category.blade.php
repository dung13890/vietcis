@extends('layouts.frontend')

@section('title',$category->name)

@section('page-banner')
  <!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h3 class="main-title__secondary">{{$category->name}}</h3>
	</div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
	<div class="container">
		<span>
			<a class="home" href="/" title="Trang chủ" rel="v:url">Trang chủ</a>
		</span>
		<span>
			<span>{{$category->name}}</span>
		</span>
	</div>
</div><!-- /.breadcrumbs -->
@stop

@section('page-content')
<div class="container">
	<div class="row margin-bottom-30">
		<div class="col-xs-12 col-sm-9">
			@foreach($posts as $post)
			<article class="clearfix hentry">
				<a href="{{route('post.show',$post->slug)}}">
					<img alt="{{$post->name}}" class="img-responsive" src="{{route('image.resize',[$post->image,840,480])}}">
				</a>
				<div class="meta-data">
					<time class="meta-data__date" datetime="{{$post->created_at}}">{{date('M d, Y',strtotime($post->created_at))}}</time>
					<span class="meta-data__separator">/</span>
					<span class="meta-data__author">By {{$post->user->name}}</span>
				</div>
				<h2 class="hentry__title"><a href="{{route('post.show',$post->slug)}}">{{$post->name}}</a></h2>
				<div class="hentry__content">
					<p>{{$post->intro}}</p>
					<p>
						<a class="more-link" href="{{route('post.show',$post->slug)}}">
							<span class="btn btn-default btn--post">Xem tiếp</span>
						</a>
					</p>
				</div>
			</article>
			@endforeach
			<nav class="navigation pagination">
				{{$posts->render()}}
			</nav>
		</div>
	@include('frontend._partials.sidebar')
	</div>
</div>
@endsection

@section('body-append')
    @parent
@endsection
