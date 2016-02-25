<div class="ibox float-e-margins">
	<div class="ibox-title">
		<div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-introleft" data-toggle="tab">LEFT</a></li>
			<li><a href="#tab-introright" data-toggle="tab">RIGHT</a></li>
		</ul>
	</div>
	<div class="ibox-content">
		<div class="tab-content">
			<div class="tab-pane active" id="tab-introleft">
				<div class="form-group">
					{!! Form::label('introleft','Cuối trang bên trái', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::textarea('introleft',null, ['class' => 'form-control','rows'=>'2', 'placeholder'=>'Cuối trang bên trái']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-introright">
				<div class="form-group">
					{!! Form::label('introright','Cuối trang bên phải', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::textarea('introright',null, ['class' => 'form-control', 'rows'=>'2', 'placeholder'=>'Cuối trang bên phải']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
