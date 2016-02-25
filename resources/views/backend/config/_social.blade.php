<div class="ibox float-e-margins">
	<div class="ibox-title">
		<div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-facebook" data-toggle="tab">FAC</a></li>
			<li><a href="#tab-twitter" data-toggle="tab">TWI</a></li>
			<li><a href="#tab-youtube" data-toggle="tab">YOU</a></li>
			<li><a href="#tab-google" data-toggle="tab">Goo</a></li>
		</ul>
	</div>
	<div class="ibox-content">
		<div class="tab-content">
			<div class="tab-pane active" id="tab-facebook">
				<div class="form-group">
					{!! Form::label('facebook','Facebook', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('facebook',null, ['class' => 'form-control', 'placeholder'=>'http://']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-twitter">
				<div class="form-group">
					{!! Form::label('twitter','Twitter', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('twitter',null, ['class' => 'form-control', 'placeholder'=>'http://']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-youtube">
				<div class="form-group">
					{!! Form::label('youtube','Youtube', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('youtube',null, ['class' => 'form-control', 'placeholder'=>'http://']) !!}
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab-google">
				<div class="form-group">
					{!! Form::label('google','Google +', ['class'=>'col-sm-12 control-label']) !!}
					<div class="col-sm-12">
					{!! Form::text('google',null, ['class' => 'form-control', 'placeholder'=>'http://']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
