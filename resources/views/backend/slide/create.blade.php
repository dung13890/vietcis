@extends('layouts.backend')

@section('title',isset($heading) ? $heading : 'Thêm mới')

@section('page-content')
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		{!! Form::open(['url' => route('admin.slide.store'),'class' => 'form-horizontal','files' => true,'autocomplete'=>'off']) !!}
		{!!Form::hidden('type','slide')!!}
		<div class="col-sm-10">
			@include('backend.slide._form')       
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection