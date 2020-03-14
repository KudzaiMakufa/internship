<h2>Editing Gender</h2>
<br>

<?php echo render('gender/_form'); ?>
<p>
	<?php echo Html::anchor('gender/view/'.$gender->id, 'View'); ?> |
	<?php echo Html::anchor('gender', 'Back'); ?></p>
