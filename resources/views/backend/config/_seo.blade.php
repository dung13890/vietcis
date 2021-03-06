<div class="ibox float-e-margins">
	<div class="ibox-title">
		<div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-title" data-toggle="tab">TIT</a></li>
			<li><a href="#tab-keywords" data-toggle="tab">KEY</a></li>
			<li><a href="#tab-description" data-toggle="tab">DES</a></li>
		</ul>
	</div>
	<div class="ibox-content">
		<div class="tab-content">
			<div class="tab-pane active" id="tab-title">
				<div class="form-group">
					{!! Form::label('title','Tiêu đề', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::textarea('title',null, ['class' => 'form-control','rows'=>'2', 'placeholder'=>'SEO - Title']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-keywords">
				<div class="form-group">
					{!! Form::label('keywords','Từ khóa', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::textarea('keywords',null, ['class' => 'form-control' , 'rows'=>'2', 'placeholder'=>'SEO - Keywords']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-description">
				<div class="form-group">
					{!! Form::label('description','Mô tả', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::textarea('description',null, ['class' => 'form-control', 'rows'=>'2', 'placeholder'=>'SEO - Description']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
