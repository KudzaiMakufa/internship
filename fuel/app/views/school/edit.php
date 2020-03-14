<h2>Editing School</h2>
<br>

<?php echo render('school/_form'); ?>
<p>
	<?php echo Html::anchor('school/view/'.$school->id, 'View'); ?> |
	<?php echo Html::anchor('school', 'Back'); ?></p>
