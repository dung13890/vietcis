@extends('layouts.backend')
@section('title',isset($heading) ? $heading : 'Danh sách')
@section('head-append')
    @parent
    {{ HTML::style("assets/backend/css/plugins/dataTables/datatables.min.css") }}
@endsection
@section('body-append')
    @parent
    {{ HTML::script("assets/backend/js/plugins/dataTables/datatables.min.js") }}
    <script>
		var flash_message = '{!!session("flash_message")!!}';
		$(function(){
			renderTable('{!! route('admin.service.data') !!}',
			    [
			        { data: 'id', name: 'id', searchable: false },
			        { data: 'name', name: 'name'},
			        { data: 'icon_fa', orderable: false, name: 'icon_fa'},
			        { data: 'order', orderable: true, name: 'order'},
			        { data: 'actions', name: 'actions', orderable: false, searchable: false, sClass: "text-center"}
			    ],{
		    	createdRow: function ( row, data, index ) {
		    		$('td', row).eq(0).css('display','none');
		    		if (data.actions.edit) {
		    			$('td', row).eq(1).html('<a target="_blank" title="'+data.actions.edit.label+'" href="'+data.actions.edit.uri+'">'+data.name+'</a>');
		    		}
		    		if(data.icon_fa) {
		    			$('td',row).eq(2).html('<img class="img-thumbnail" src="'+laroute.route('image.resize', {file:data.icon_fa,w:36,h:36})+'"/>');
		    		}
		    		var actions = data.actions;
		    		if (!actions || actions.length < 1) { return; }
		    		var $actions = $('td', row).eq(4);
		    		$actions.html('');
		    		if (actions.edit) { $actions.append('<a title ="'+actions.edit.label+'" class="btn btn-default btn-xs" href="'+actions.edit.uri+'"><i class="fa fa-pencil"></i></a> ');}
		    		if (actions.delete) {
			    		var $btn = $('<a title="'+actions.delete.label+'" class="btn btn-danger btn-xs" href="'+actions.delete.uri+'"><i class="fa fa-times"></i></a> ').appendTo($actions);
			    		$btn.on('click',function(event) {
			    			event.preventDefault();
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
			                	swal("Xóa!", "Bạn đã xóa dữ liệu.", "success");
			                    $.post($this.attr('href'), {_method: 'DELETE'}, function (data) {
			                        console.log(data);
			                        window.location.reload();
			                    });
			                });
			    		});
			    	}
		    	}
		    });
		});
	</script>
@endsection

@section('page-content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li ><a href="{{route('admin.slide.home')}}" >Box Tin</a></li>
                <li class="active"><a href="{{route('admin.service.index')}}" >{{trans('repositories.service')}}</a></li>
                <li ><a  href="{{route('admin.partner.index')}}" >{{trans('repositories.partner')}}</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins" style="border-top:0">
                <div class="ibox-title">
                    <h5></h5>
                    <div class="ibox-tools">
                        <a href="{{ route('admin.service.create') }}" class="btn btn-success btn-xs create-link"> <i class="fa fa-plus"></i> {{trans('repositories.create')}}</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover prome-datatables" width="100%">
                            <thead>
								<tr>
									<th style="display:none">ID</th>
									<th>Name</th>
									<th>Icon</th>
									<th>Thứ tự</th>
									<th>Actions</th>
								</tr>
							</thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


