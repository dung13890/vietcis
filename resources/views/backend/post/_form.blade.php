@section('head-append')
	@parent
	{!!HTML::style('assets/backend/js/plugins/summernote/dist/summernote.css')!!}
@endsection
<div class="ibox float-e-margins">
	<div class="ibox-title">
        <h5>{!!$heading or 'Thêm mới'!!}</h5>
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
			{!! Form::label('name','Tiêu đề', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::text('name',null, ['class' => 'form-control','required','placeholder'=>'Bắt buộc']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::text('tags',null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('intro','Giới thiệu', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::textarea('intro',null, ['class' => 'form-control','rows'=>'3']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('content','Nội dung', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::textarea('content',null, ['class' => 'form-control textarea-summernote']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('status','Trang chủ', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
				<label class="radio-inline">{!! Form::radio('status',1,true ) !!}  Hiển thị</label>
				<label class="radio-inline">{!! Form::radio('status',2 ) !!}  Ẩn trang chủ</label>
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-8 col-sm-offset-2">
				{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
			</div>
		</div>
	</div>
</div>

@section('body-append')
	@parent
	{!!HTML::script('assets/backend/js/plugins/summernote/dist/summernote.min.js')!!}
	<script>
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