<div class="ibox float-e-margins">
	<div class="ibox-title">
        <h5>{!!$heading or ''!!}</h5>
        @if (isset($item))
        <div class="ibox-tools">
            <a href="{{ route('admin.category.type',$type) }}" class="btn btn-success btn-xs create-link"> <i class="fa fa-plus"></i> {{trans('repositories.create')}}</a>
        </div>
        @endif
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
			{!! Form::label('parent_id','Danh mục cha', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::select('parent_id',$listCategories, null,['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			{!! Form::label('description','Mô tả', ['class'=>'col-sm-2 control-label']) !!}
			<div class="col-sm-8">
			{!! Form::textarea('description',null, ['class' => 'form-control','rows'=>'4']) !!}
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
