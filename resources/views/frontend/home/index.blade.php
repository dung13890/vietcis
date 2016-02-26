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
				
				<p> {{mb_substr($boxHome[0]->description,0,175,'UTF-8')}}</p>
				
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
			
			<p>{{mb_substr($box->description,0,80,'UTF-8')}}</p>
			
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
				<span>Sản phẩm và dịch vụ</span>
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
					<img src="{{route('image.resize',[$service->icon_fa,45,45])}}">
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
						<a target="_blank" href="{{route('contact.show')}}" class="btn btn-primary">HÃY LIÊN HỆ NGAY</a> 
					</div>
				</div><!-- /.call-to-action -->
			
			</div><!-- /.col -->
		
		</div><!-- /.row -->
		
	</div><!-- /.container -->
	
</div><!-- /.cta -->

<!-- OUR PARTNERS -->
<div class="container">
	
	<div class="row margin-bottom-60">
		
		<div class="col-sm-12">
			
			<div class="widget_text">
				
				<h3 class="widget-title lined big">
					<span>Đối tác của VIETCIS</span>
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
