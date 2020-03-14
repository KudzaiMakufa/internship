<h2>Listing Jobs</h2>
<br>
<?php if ($listings): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Positon</th>
			<th>Company</th>
			<th>Startdate</th>
			<th>Additional information</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($listings as $item): ?>		<tr>

			<td><?php echo $item->positon; ?></td>
			<td><?php echo $item->company; ?></td>
			<td><?php echo $item->startdate; ?></td>
			<td><?php echo $item->additional_information; ?></td>
			<td>
				<?php echo Html::anchor('listing/apply/'.$item->id, 'Apply' ,array('class'=>'btn-sm btn-primary')); ?> 
				<?php //echo Html::anchor('listing/edit/'.$item->id, 'Edit'); ?> 
				<?php //echo Html::anchor('listing/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Job listings at the moment</p>

<?php endif; ?><p>
	

</p>
