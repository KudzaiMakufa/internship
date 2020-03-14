<h2>Viewing #<?php echo $Upload->id; ?></h2>

<p>
	<strong>Field:</strong>
	<?php echo $Upload->field; ?></p>
<p>
	<strong>Saved as:</strong>
	<?php echo $Upload->saved_as; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $Upload->name; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $Upload->type; ?></p>
<p>
	<strong>File:</strong>
	<?php echo $Upload->file; ?></p>
<p>
	<strong>Error:</strong>
	<?php echo $Upload->error; ?></p>
<p>
	<strong>Size:</strong>
	<?php echo $Upload->size; ?></p>
<p>
	<strong>Extension:</strong>
	<?php echo $Upload->extension; ?></p>
<p>
	<strong>Basename:</strong>
	<?php echo $Upload->basename; ?></p>
<p>
	<strong>Mimetype:</strong>
	<?php echo $Upload->mimetype; ?></p>
<p>
	<strong>Error:</strong>
	<?php echo $Upload->error; ?></p>

<?php echo Html::anchor('uploads/edit/'.$Upload->id, 'Edit'); ?> |
<?php echo Html::anchor('uploads', 'Back'); ?>