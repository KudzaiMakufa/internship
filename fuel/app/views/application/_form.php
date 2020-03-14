<?php echo Form::open(array("class"=>"form-horizontal",
"enctype"=>"multipart/form-data",
)); ?>

	<fieldset>
		
			<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('name', Input::post('name', isset($application) ? $application->problem : ''), array('class' => 'col-md-4 form-control','placeholder'=>'Name')); ?>
                </div>
                
            </div> 


            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Registration number</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('registration_number', Input::post('registration_number', isset($application) ? $application->registration_number : ''), array('class' => 'col-md-4 form-control','placeholder'=>'Registration number')); ?>
                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone number</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('phone_number', Input::post('phone_number', isset($application) ? $application->phone_number : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'phone number')); ?>
                </div>
                
            </div> 



            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('email', Input::post('email', isset($application) ? $application->email : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'email')); ?>
                </div>
                
            </div> 

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Brief information</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('brief_information', Input::post('brief_information', isset($application) ? $application->brief_information : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'brief information')); ?>
                </div>
                
            </div> 


            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                	<?php 
                	$gender = Model_Gender::find_all();

                	$arr=array('0'=>'--Please Select Gender--');
					
					foreach ($gender as $item) {
						$arr[$item->name] = $item->name;
					}
					
					?>
                   <?php echo Form::select('gender', Input::post('gender', isset($item) ? $item->name : ''), $arr,array('class' => 'col-md-4 form-control')); ?>
                </div>
                
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">School</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                	<?php 
                	$gender = Model_School::find_all();

                	$arr=array('0'=>'--Please Select School--');
					
					foreach ($gender as $item) {
						$arr[$item->name] = $item->name;
					}
					
					?>
                   <?php echo Form::select('school', Input::post('school', isset($application) ? $application->school : ''),$arr, array('class' => 'col-md-4 form-control')); ?>
                </div>
                
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Programme</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                	<?php 
                	$school = Model_Programme::find_all();

                	$arr=array('0'=>'--Please Select Program--');
					
					foreach ($school as $item) {
						$arr[$item->name] = $item->name;
					}
					
					?>
                   <?php echo Form::select('programme', Input::post('programme', isset($application) ? $application->programme : ''), $arr,array('class' => 'col-md-4 form-control')); ?>
                </div>
                
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Duration</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::input('duration', Input::post('duration', isset($application) ? $application->duration : ''), array('class' => 'col-md-4 form-control', 'rows' =>3 ,'placeholder'=>'duration')); ?>
                </div>
                
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Curriculum vitae</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                   <?php echo Form::file('curriculum_vitae', array('class' => 'col-md-4 form-control')); ?>
                </div>
                
            </div>


		<div class="form-group" align="center">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Apply', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>