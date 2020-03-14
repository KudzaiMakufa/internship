<h2>Editing Upload</h2>
<br>

<?php echo render('uploads/_form'); ?>
<p>
	<?php echo Html::anchor('uploads/view/'.$Upload->id, 'View'); ?> |
	<?php echo Html::anchor('uploads', 'Back'); ?></p>
