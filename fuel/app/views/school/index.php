<h2>Listing Schools</h2>
<br>
<?php if ($schools): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($schools as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('school/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('school/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('school/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Schools.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('school/create', 'Add new School', array('class' => 'btn btn-success')); ?>

</p>
