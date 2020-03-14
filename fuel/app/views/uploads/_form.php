<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Field', 'field', array('class'=>'control-label')); ?>

				<?php echo Form::input('field', Input::post('field', isset($Upload) ? $Upload->field : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Field')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Saved as', 'saved_as', array('class'=>'control-label')); ?>

				<?php echo Form::input('saved_as', Input::post('saved_as', isset($Upload) ? $Upload->saved_as : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Saved as')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($Upload) ? $Upload->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Type', 'type', array('class'=>'control-label')); ?>

				<?php echo Form::input('type', Input::post('type', isset($Upload) ? $Upload->type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('File', 'file', array('class'=>'control-label')); ?>

				<?php echo Form::input('file', Input::post('file', isset($Upload) ? $Upload->file : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'File')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Error', 'error', array('class'=>'control-label')); ?>

				<?php echo Form::input('error', Input::post('error', isset($Upload) ? $Upload->error : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Error')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Size', 'size', array('class'=>'control-label')); ?>

				<?php echo Form::input('size', Input::post('size', isset($Upload) ? $Upload->size : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Size')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Extension', 'extension', array('class'=>'control-label')); ?>

				<?php echo Form::input('extension', Input::post('extension', isset($Upload) ? $Upload->extension : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Extension')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Basename', 'basename', array('class'=>'control-label')); ?>

				<?php echo Form::input('basename', Input::post('basename', isset($Upload) ? $Upload->basename : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Basename')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Mimetype', 'mimetype', array('class'=>'control-label')); ?>

				<?php echo Form::input('mimetype', Input::post('mimetype', isset($Upload) ? $Upload->mimetype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Mimetype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Error', 'error', array('class'=>'control-label')); ?>

				<?php echo Form::input('error', Input::post('error', isset($Upload) ? $Upload->error : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Error')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>