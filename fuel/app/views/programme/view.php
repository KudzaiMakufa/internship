<h2>Viewing #<?php echo $programme->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $programme->name; ?></p>

<?php echo Html::anchor('programme/edit/'.$programme->id, 'Edit'); ?> |
<?php echo Html::anchor('programme', 'Back'); ?>