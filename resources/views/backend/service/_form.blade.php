<div class="ibox float-e-margins" style="border-top:0">
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
			{!! Form::label('name','Text', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::text('name',null, ['class' => 'form-control','required','placeholder'=>'name']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('link','Link', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::text('link',null, ['class' => 'form-control','placeholder'=>'Http:// Link chi tiết']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('icon_fa','Icon ( 45 x 45 )', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
					<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 150px; height: 100px;">
						{!! HTML::image( (isset($item) && $item->icon_fa )? asset($item->icon_fa) :  asset('assets/backend/img/no-image.png'), '') !!}
					</div>
					<div>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
						<div class="btn btn-default btn-file">
						<span class="fileinput-new">Chọn ảnh</span>
						<span class="fileinput-exists">Thay đôi</span>
						{!! Form::file('icon_fa') !!}
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('description','Mô tả', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::textarea('description',null, ['class' => 'form-control','rows'=>'3']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('order','Thứ tự', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::text('order',null, ['class' => 'form-control','placeholder'=>'0']) !!}
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
	{!!HTML::script('assets/backend/js/plugins/form-jasnyupload/fileinput.min.js')!!}

@endsection