<h2>Viewing #<?php echo $gender->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $gender->name; ?></p>

<?php echo Html::anchor('gender/edit/'.$gender->id, 'Edit'); ?> |
<?php echo Html::anchor('gender', 'Back'); ?>