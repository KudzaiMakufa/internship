<h2>Editing Application</h2>
<br>

<?php echo render('application/_form'); ?>
<p>
	<?php echo Html::anchor('application/view/'.$application->id, 'View'); ?> |
	<?php echo Html::anchor('application', 'Back'); ?></p>
