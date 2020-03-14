<h2>Viewing #<?php echo $school->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $school->name; ?></p>

<?php echo Html::anchor('school/edit/'.$school->id, 'Edit'); ?> |
<?php echo Html::anchor('school', 'Back'); ?>