<h2>Editing Programme</h2>
<br>

<?php echo render('programme/_form'); ?>
<p>
	<?php echo Html::anchor('programme/view/'.$programme->id, 'View'); ?> |
	<?php echo Html::anchor('programme', 'Back'); ?></p>
