<div class="ibox float-e-margins">
	<div class="ibox-title">
		<div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-office" data-toggle="tab">Văn phòng</a></li>
			<li><a href="#tab-staff" data-toggle="tab">Nhân viên</a></li>
			<li><a href="#tab-born" data-toggle="tab">Năm thành lập</a></li>
		</ul>
	</div>
	<div class="ibox-content">
		<div class="tab-content">
			<div class="tab-pane active" id="tab-office">
				<div class="form-group">
					{!! Form::label('office','Văn phòng đại diện', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('office',null, ['class' => 'form-control', 'placeholder'=>'Nhập ký tự số']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-staff">
				<div class="form-group">
					{!! Form::label('staff','Nhân viên kỹ thuật', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('staff',null, ['class' => 'form-control' , 'placeholder'=>'Nhập ký tự số']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-born">
				<div class="form-group">
					{!! Form::label('born','Năm thành lập', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('born',null, ['class' => 'form-control', 'placeholder'=>'Năm thành lập']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
