@extends('layouts.backend')

@section('title',isset($heading) ? $heading : 'Thêm mới')

@section('page-content')
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-sm-10">
            <ul class="nav nav-tabs">
                <li ><a href="{{route('admin.slide.home')}}" >Box Tin</a></li>
                <li class="active"><a href="{{route('admin.service.index')}}" >{{trans('repositories.service')}}</a></li>
                <li ><a  href="{{route('admin.partner.index')}}" >{{trans('repositories.partner')}}</a></li>
            </ul>
        </div>
    </div>
	<div class="row">
		{!! Form::open(['url' => route('admin.service.store'), 'files' => true, 'class' => 'form-horizontal','autocomplete'=>'off']) !!}
		<div class="col-sm-10">
			@include('backend.service._form')       
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection