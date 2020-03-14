<h2>Viewing #<?php echo $application->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $application->name; ?></p>
<p>
	<strong>Registration number:</strong>
	<?php echo $application->registration_number; ?></p>
<p>
	<strong>Phone number:</strong>
	<?php echo $application->phone_number; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $application->email; ?></p>
<p>
	<strong>Brief information:</strong>
	<?php echo $application->brief_information; ?></p>
<p>
	<strong>Gender:</strong>
	<?php echo $application->gender; ?></p>
<p>
	<strong>School:</strong>
	<?php echo $application->school; ?></p>
<p>
	<strong>Programme:</strong>
	<?php echo $application->programme; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $application->duration; ?></p>
<p>
	<strong>Curriculum vitae:</strong>
	<?php echo $application->curriculum_vitae; ?></p>

<?php echo Html::anchor('application/edit/'.$application->id, 'Edit'); ?> |
<?php echo Html::anchor('application', 'Back'); ?>