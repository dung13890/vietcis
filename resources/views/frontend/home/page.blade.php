@extends('layouts.frontend')

@section('title',empty($page->title) ? $page->name : $page->title)
@section('description',$page->description)
@section('keywords',$page->keywords)

@section('page-banner')
  <!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h3 class="main-title__secondary">{{$page->name}}</h3>
	</div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
	<div class="container">
		<span>
			<a class="home" href="/" title="Trang chủ" rel="v:url">Trang chủ</a>
		</span>
		<span>
			<span>{{$page->name}}</span>
		</span>
	</div>
</div><!-- /.breadcrumbs -->
@stop
@section('page-content')
<div class="container">
	<div class="row margin-bottom-30">
		<div class="col-xs-12">
			<article class="clearfix hentry">
				{!!$page->content!!}
			</article>
		</div>
	</div>
</div>
@endsection

@section('body-append')
    @parent
@endsection
