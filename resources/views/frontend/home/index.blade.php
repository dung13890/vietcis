@extends('layouts.frontend')

@section('page-banner')
  @include('frontend._partials.slide')
@stop
@section('page-content')
<!-- OUR SERVICES -->
<div class="container" role="main">
	
	<div class="row jumbotron-overlap first">
		@if (isset($boxHome[0]))
		<div class="col-sm-3">
			
			<div class="featured-widget">
			
				<h3 class="widget-title">{{$boxHome[0]->name}}</h3>
				
				<p>{{$boxHome[0]->description}}</p>
				
				<p>
					<a class="read-more" href="{{$boxHome[0]->link}}">XEM TIẾP</a>
				</p>
			
			</div>
			
		</div><!-- /.col -->
		@endif

		@if (isset($boxHome[1]))
		@foreach($boxHome->splice(1,3) as $box)
		<div class="col-sm-3">
			
			<a href="{{$box->link}}">
				<img alt="{{$box->name}}" class="post-image"  src="{{route('image.resize',[$box->image,360,203])}}">
			</a>
			
			<h5 class="page-box__title"><a href="{{$box->link}}">{{$box->name}}</a></h5>
			
			<p>{{$box->description}}</p>
			
			<p>
				<a class="read-more" href="{{$box->link}}">Đọc thêm</a>
			</p>
			
		</div><!-- /.col -->
		@endforeach
		@endif		
	</div><!-- /.row -->
	
	<div class="row">
		
		<div class="col-sm-12">
			
			<h3 class="widget-title big lined">
				<span>SẢN PHẨM VÀ DỊCH VỤ</span>
			</h3>
			
		</div><!-- /.col -->
		
	</div><!-- /.row -->
	
	<div class="row">
		@if(count($services) > 2)
		@foreach($services->chunk(2) as $chunk)
		<div class="col-sm-4">
			@foreach($chunk as $service)
			<div class="widget_pw_icon_box margin-bottom-30">
				<a target="_self" href="{{$service->link}}" class="icon-box">
					<i class="fa {{$service->icon_fa}}"></i>
					<h4 class="icon-box__title">{{$service->name}}</h4>
					<span class="icon-box__subtitle">{{$service->description}}</span>
				</a>
			</div><!-- /.widget_pw_icon_box -->
			@endforeach
			
		</div><!-- /.col -->
		
		@endforeach
		@endif
		
	</div><!-- /.row -->
	
</div><!-- /.conainer -->

<!-- CTA -->
<div class="cta">
	
	<div class="container">
		
		<div class="row">
		
			<div class="col-md-12">
			
				<div class="call-to-action">
					<div class="call-to-action__text">
						Bạn cần được tư vấn để hiểu rõ hơn về dịch vụ và sản phẩm mình quan tâm?
					</div>
					<div class="call-to-action__button">
						<a target="_blank" href="#" class="btn btn-primary">HÃY LIÊN HỆ NGAY</a> 
					</div>
				</div><!-- /.call-to-action -->
			
			</div><!-- /.col -->
		
		</div><!-- /.row -->
		
	</div><!-- /.container -->
	
</div><!-- /.cta -->

<!-- NEWS -->
<div class="news margin-bottom-60">

	<div class="container">
		<div class="row">
		@foreach($posts->splice(0,2) as $postNew)
			
			<div class="col-sm-4 margin-bottom-30">
				
				<div class="widget_pw_latest_news">
					<a class="latest-news" href="{{route('post.show',$postNew->slug)}}">
						<div class="latest-news__date">
							<div class="latest-news__date__month">{{date('M',strtotime($postNew->created_at))}}</div>
							<div class="latest-news__date__day">{{date('d',strtotime($postNew->created_at))}}</div>
						</div>
						<img alt="{{$postNew->name}}" class="wp-post-image" src="{{route('image.resize',[$postNew->image,360,204])}}">
						<div class="latest-news__content">
							<h4 class="latest-news__title">{{mb_substr($postNew->name,0,25,'UTF-8')}}</h4>
							<div class="latest-news__author">By {{$postNew->user->name}}</div>
						</div>
					</a>
				</div><!-- /.widget_pw_latest_news -->
				
			</div><!-- /.col -->
		@endforeach

		<div class="col-sm-4">	
			<div class="widget_pw_latest_news">
				@foreach($posts->splice(0,3) as $post)
				<a class="latest-news  latest-news--inline" href="{{route('post.show',$post->slug)}}">
					<div class="latest-news__content">
						<h4 class="latest-news__title">{{$post->name}}</h4>
						<div class="latest-news__author">By {{$post->user->name}}</div>
					</div>
				</a>
				@endforeach
				@if (isset($posts[0]))
				<a class="latest-news  latest-news--more-news" href="{{route('post.category',$posts[0]->categories->first()->slug)}}">
					Các tin khác
				</a>
				@endif
			</div><!-- /.widget_pw_latest_news -->
		</div><!-- /.col -->
			
		</div><!-- /.row -->
		
	</div><!-- /.container -->

</div><!-- /.news -->

<!-- OUR PARTNERS -->
<div class="container">
	
	<div class="row margin-bottom-60">
		
		<div class="col-sm-12">
			
			<div class="widget_text">
				
				<h3 class="widget-title lined big">
					<span>ĐỐI TÁC CỦA VIETCIS</span>
				</h3>
				<div class="logo-panel">
					<div class="row">
						@foreach($partners as $partner)
						<div class="col-xs-12  col-sm-2">
							<a target="_blank" href="{{$partner->link}}"><img alt="Client" src="{{route('image.resize',[$partner->logo,208,98])}}"></a>
						</div>
						@endforeach
					</div><!-- /.row -->
				</div><!-- /.logo-panel -->
					
			</div><!-- /.widget_text -->
			
		</div><!-- /.col -->
		
	</div><!-- /.row -->
	
</div><!-- /.container -->

<!-- COUNTERS -->
<div class="counters">
	
	<div class="container">
		 
		 <div  class="widget_pw_number-counter panel-first-child panel-last-child">
			 <div data-speed="1000" class="widget-number-counters">
				 <div class="number-counter">
					 <i class="number-counter__icon fa fa-building-o"></i>
					 <div data-to="{{$configs->office}}" class="number-counter__number js-number">00</div>
					 <div class="number-counter__title">Văn phòng đại diện</div>
		 		 </div>
		 		 <div class="number-counter">
					 <i class="number-counter__icon fa fa-users"></i>
		 	 		 <div data-to="{{$configs->staff}}" class="number-counter__number js-number">00</div>
		 	 		 <div class="number-counter__title">Chuyên viên kỹ thuật</div>
		 		 </div>
		 		 <div class="number-counter">
					 <i class="number-counter__icon fa fa-globe"></i>
			   		 <div data-to="64" class="number-counter__number js-number">00</div>
		 	 		 <div class="number-counter__title">Tỉnh thành cả nước</div>
		 		 </div>
		 		 <div class="number-counter">
					 <i class="number-counter__icon fa fa-clock-o"></i>
		 	   		 <div data-to="{{date('Y') - $configs->born}}" class="number-counter__number js-number">00</div>
		 	   		 <div class="number-counter__title">Năm kinh nghiệm</div>
				 </div>
			 </div>
		 </div>
		 
	</div><!-- /.container -->
	
</div><!-- /.counters -->

@endsection

@section('body-append')
    @parent
    {{ HTML::script('assets/frontend/js/modernizr.custom.24530.js') }}
@endsection
