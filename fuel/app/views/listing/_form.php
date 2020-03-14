<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Position', 'positon', array('class'=>'control-label')); ?>

				<?php echo Form::input('positon', Input::post('positon', isset($listing) ? $listing->positon : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Position')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Company', 'company', array('class'=>'control-label')); ?>

				<?php echo Form::input('company', Input::post('company', isset($listing) ? $listing->company : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Company')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Startdate', 'startdate', array('class'=>'control-label')); ?>

				<?php echo Form::input('startdate', Input::post('startdate', isset($listing) ? $listing->startdate : ''), array('class' => 'col-md-4 form-control', 'type'=>'date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Additional information', 'additional_information', array('class'=>'control-label')); ?>

				<?php echo Form::input('additional_information', Input::post('additional_information', isset($listing) ? $listing->additional_information : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Additional information')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>