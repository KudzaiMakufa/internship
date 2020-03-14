<h2>Viewing #<?php echo $listing->id; ?></h2>

<p>
	<strong>Positon:</strong>
	<?php echo $listing->positon; ?></p>
<p>
	<strong>Company:</strong>
	<?php echo $listing->company; ?></p>
<p>
	<strong>Startdate:</strong>
	<?php echo $listing->startdate; ?></p>
<p>
	<strong>Additional information:</strong>
	<?php echo $listing->additional_information; ?></p>

<?php echo Html::anchor('listing/edit/'.$listing->id, 'Edit'); ?> |
<?php echo Html::anchor('listing', 'Back'); ?>