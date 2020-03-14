<h2>Listing Genders</h2>
<br>
<?php if ($genders): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($genders as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('gender/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('gender/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('gender/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Genders.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('gender/create', 'Add new Gender', array('class' => 'btn btn-success')); ?>

</p>
