<h2>Editing Listing</h2>
<br>

<?php echo render('listing/_form'); ?>
<p>
	<?php echo Html::anchor('listing/view/'.$listing->id, 'View'); ?> |
	<?php echo Html::anchor('listing', 'Back'); ?></p>
