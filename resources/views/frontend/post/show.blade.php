@extends('layouts.frontend')

@section('title',empty($item->title) ? $item->name : $item->title)
@section('description',$item->description)
@section('keywords',$item->keywords)

@section('page-banner')
  <!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h3 class="main-title__secondary">{{$item->name}}</h3>
	</div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
	<div class="container">
		<span>
			<a class="home" href="/" title="Trang chủ" rel="v:url">Trang chủ</a>
		</span>
		<span>
			<a href="{{route('post.category',$item->categories->first()->slug)}}" title="{{$item->categories->first()->name}}" property="v:title" rel="v:url">{{$item->categories->first()->name}}</a>
		</span>
		<span>
			<span>{{$item->name}}</span>
		</span>
	</div>
</div><!-- /.breadcrumbs -->
@stop

@section('page-content')
<div class="container">
	<div class="row margin-bottom-30">
		<div class="col-xs-12 col-sm-9">
			<article class="clearfix hentry">
				<h2>{{$item->name}}</h2>
				{!!$item->content!!}
			</article>
		</div>
	@include('frontend._partials.sidebar')
	</div>
</div>
@endsection

@section('body-append')
    @parent
@endsection
