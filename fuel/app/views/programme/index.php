<h2>Listing Programmes</h2>
<br>
<?php if ($programmes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($programmes as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('programme/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('programme/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('programme/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Programmes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('programme/create', 'Add new Programme', array('class' => 'btn btn-success')); ?>

</p>
