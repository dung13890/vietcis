@extends('layouts.backend')

@section('title',isset($heading) ? $heading : 'Danh sách')

@section('head-append')
	@parent
	{!!HTML::style('assets/backend/js/plugins/summernote/dist/summernote.css')!!}
@endsection

@section('page-content')
<div class="wrapper wrapper-content">
	<div class="row">
		{!! Form::model($item,['method' => 'PATCH', 'url' => route('admin.config.update', $item->id), 'files' => true, 'class' => 'form-horizontal']) !!}
		<div class="col-sm-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
			        <h5>{!!$heading or 'Config'!!}</h5>
			        <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
			    </div>
				<div class="ibox-content">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif  

					<div class="form-group">
						{!! Form::label('email','Email', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::email('email',null, ['class' => 'form-control']) !!}
						</div>
					</div> 

					<div class="form-group">
						{!! Form::label('phone','Phone', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::text('phone',null, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('timeword','Giờ làm việc', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::text('timeword',null, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('address','Address', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::text('address',null, ['class' => 'form-control']) !!}
						</div>
					</div>  

					<div class="form-group">
						{!! Form::label('copyright','Copy Right', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::text('copyright',null, ['class' => 'form-control']) !!}
						</div>
					</div>  

					<div class="form-group">
						{!! Form::label('content','Nội dung', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
						{!! Form::textarea('content',null, ['class' => 'form-control textarea-summernote']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('logo1','Logo Header', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
								<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 150px; height: 100px;">
									{!! HTML::image( (isset($item) && $item->logo1 )? asset($item->logo1) :  asset('assets/backend/img/no-image.png'), '') !!}
								</div>
								<div>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
									<div class="btn btn-default btn-file">
									<span class="fileinput-new">Chọn ảnh</span>
									<span class="fileinput-exists">Thay đôi</span>
									{!! Form::file('logo1') !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('logo2','Logo Footer', ['class'=>'col-sm-2 control-label']) !!}
						<div class="col-sm-8">
							<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
								<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 150px; height: 100px;">
									{!! HTML::image( (isset($item) && $item->logo2 )? asset($item->logo2) :  asset('assets/backend/img/no-image.png'), '') !!}
								</div>
								<div>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
									<div class="btn btn-default btn-file">
									<span class="fileinput-new">Chọn ảnh</span>
									<span class="fileinput-exists">Thay đôi</span>
									{!! Form::file('logo2') !!}
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			@include('backend.config._seo') 
			@include('backend.config._social') 
			@include('backend.config._info') 
			@include('backend.config._intro') 
			
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection


@section('body-append')
	@parent
	{!!HTML::script('assets/backend/js/plugins/summernote/dist/summernote.min.js')!!}
	{!!HTML::script('assets/backend/js/plugins/form-jasnyupload/fileinput.min.js')!!}
	<script>
	var flash_message = '{!!session("flash_message")!!}';
		$(function(){

			$('.textarea-summernote').summernote({
			  height:200,
			  callbacks: {
				  onImageUpload: function(files) {
	                    sendFile(files[0]);
	                  	}
	                }
			});
		});
	</script>

@endsection

