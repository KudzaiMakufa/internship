<h2>Listing Uploads</h2>
<br>
<?php if ($Uploads): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Field</th>
			<th>Saved as</th>
			<th>Name</th>
			<th>Type</th>
			<th>File</th>
			<th>Error</th>
			<th>Size</th>
			<th>Extension</th>
			<th>Basename</th>
			<th>Mimetype</th>
			<th>Error</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($Uploads as $item): ?>		<tr>

			<td><?php echo $item->field; ?></td>
			<td><?php echo $item->saved_as; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->type; ?></td>
			<td><?php echo $item->file; ?></td>
			<td><?php echo $item->error; ?></td>
			<td><?php echo $item->size; ?></td>
			<td><?php echo $item->extension; ?></td>
			<td><?php echo $item->basename; ?></td>
			<td><?php echo $item->mimetype; ?></td>
			<td><?php echo $item->error; ?></td>
			<td>
				<?php echo Html::anchor('uploads/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('uploads/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('uploads/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Uploads.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('uploads/create', 'Add new Upload', array('class' => 'btn btn-success')); ?>

</p>
