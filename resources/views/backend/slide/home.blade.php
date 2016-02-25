@extends('layouts.backend')

@section('title',isset($heading) ? $heading : 'Danh sách')

@section('head-append')
    @parent
@endsection

@section('page-content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-6">
            <ul class="nav nav-tabs">
                <li class="active"><a href="{{route('admin.slide.home')}}" >Box Tin</a></li>
                <li ><a href="{{route('admin.service.index')}}" >{{trans('repositories.service')}}</a></li>
                <li ><a  href="{{route('admin.partner.index')}}" >{{trans('repositories.partner')}}</a></li>
            </ul>
        </div>
    </div>
	<div class="row">
		<div class="col-sm-6">
			@if(isset($item))
            {!! Form::model($item, ['method' => 'PATCH','files' => true, 'url' => route('admin.slide.update', $item->id), 'role'  => 'form', 'class' => 'form-horizontal', 'autocomplete'=>'off']) !!}
            @include('backend.slide._formhome')
            {!! Form::close() !!}
            @else
            {!! Form::open(['url' => route('admin.slide.store'), 'files' => true, 'class' => 'form-horizontal', 'autocomplete'=>'off']) !!}
            @include('backend.slide._formhome')
            {!! Form::close() !!}
            @endif
		</div>
		<div class="col-sm-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
                    <h5>Thứ tự các box</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
				<div class="ibox-content">
					<div class="dd" id="nestable">
                        <ol class="dd-list">
                        	@foreach($slides as $slide)
                            <li class="dd-item">
                                <div class="dd-handle">
                                	<span class="pull-right" style="margin-top:10px">
                                        <span>{{$slide->order}}</span>
                                		<a href="{{route('admin.slide.edit', $slide->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                		<a href="{{route('admin.slide.destroy', $slide->id)}}" class="btn btn-danger btn-xs delete-handle"><i class="fa fa-times"></i></a> 
                                	</span> 
                                    <img class="img-thumbnail hidden-xs" src="{{route('image.resize',[$slide->image,30,30])}}"> <a href="{{route('admin.slide.show', $slide->id)}}">{{$slide->name}}</a>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('body-append')
	@parent
    {!! HTML::script('assets/backend/js/plugins/nestable/jquery.nestable.js') !!}       <!-- Flash Message --> 
    {!!HTML::script('assets/backend/js/plugins/form-jasnyupload/fileinput.min.js')!!}
	<script>
		var flash_message = '{!!session("flash_message")!!}';
		$(function () {
			$('.delete-handle').click(function (e) {
				e.preventDefault();
				$this = $(this);
                swal({
                    title: "Bạn chắc chắn chứ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Chắc chắn!",
                    cancelButtonText: "Hủy",
                    closeOnConfirm: false
                }, function() {
                    $.post($this.attr('href'), {_method: 'DELETE'}, function (data) {
                        console.log(data);
                        window.location.reload();
                    });
                });
			});
		});
	</script>
@endsection