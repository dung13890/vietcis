@extends('layouts.frontend')

@section('title','Liên hệ' . ' | ' . $configs->title)

@section('page-banner')
  <!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h3 class="main-title__secondary">Liên hệ</h3>
	</div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
	<div class="container">
		<span>
			<a class="home" href="/" title="Trang chủ" rel="v:url">Trang chủ</a>
		</span>
		<span>
			<span>Liên hệ</span>
		</span>
	</div>
</div><!-- /.breadcrumbs -->
@stop
@section('page-content')

<div class="map margin-bottom-60">				
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29799.592898991556!2d105.80023864062622!3d20.994676871870006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac927ce95957%3A0xe230355f8983adb9!2zVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1454534955659" width="1400" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="container">
	<div class="row margin-bottom-30">
		<div class="col-sm-3 hentry">		
			<div class="widget_black-studio-tinymce">
				<div class="featured-widget">
					<h3 class="widget-title">
						<span class="widget-title__inline">Thông tin liên hệ</span>
					</h3>
					<p>{{$configs->address}}</p>
					<p>
						{{$configs->phone}}<br>
						<a href="mailto:{{$configs->email}}">{{$configs->email}}</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<h3>Liên hệ với chúng tôi</h3>
			<p>Gửi email đánh giá chất lượng sản phẩm của chúng tôi..!</p>
			{!!Form::open(['url'=>route('contact.post'),'data-toggle'=>'validator','class'=>'aSubmit'])!!}
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form-group has-error">
							<input name="name" type="text" placeholder="Tên của bạn*" aria-invalid="false" aria-required="true" size="40" required="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<input name="email" type="email" placeholder="Địa chỉ Email*" aria-invalid="false" aria-required="true" size="40" required="">
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<input name="phone" type="tel" placeholder="Số điện thoại" aria-invalid="false" aria-required="true" size="40">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="form-group">
							<input name="subject" type="text" placeholder="Chủ đề*" aria-invalid="false" size="40"  required="">
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<textarea name="content" placeholder="Lời nhắn*" aria-invalid="false" rows="10" cols="40" required=""></textarea>
						</div>
						<input type="submit" class="btn btn-primary disabled" value="Gửi đi">
						<img class="ajax-loader" id="loader" src="/assets/frontend/images/ajax-loader.gif" alt="Sending ..." style="display: none;">
					</div>
				</div>
				<div class="response success">Your message was sent; we'll be in touch shortly!</div>
				<div class="response error">Unfortunately, we could not sent your message right now. Please try again.</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection

@section('body-append')
    @parent
@endsection
