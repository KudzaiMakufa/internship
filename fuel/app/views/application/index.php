<h2 align="center">Listing Applications</h2>
<br>
<?php if ($applications): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Registration number</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Brief information</th>
			<th>Gender</th>
			<th>School</th>
			<th>Programme</th>
			<th>Duration</th>
			<th>Curriculum vitae</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($applications as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->registration_number; ?></td>
			<td><?php echo $item->phone_number; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->brief_information; ?></td>
			<td><?php echo $item->gender; ?></td>
			<td><?php echo $item->school; ?></td>
			<td><?php echo $item->programme; ?></td>
			<td><?php echo $item->duration; ?></td>
			<td><?php echo $item->curriculum_vitae; ?></td>
			<td>
				<?php echo Html::anchor('application/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('application/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('application/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No student applications at the moment.</p>

<?php endif; ?><p>
	<?php //echo Html::anchor('application/create', 'Add new Application', array('class' => 'btn btn-success')); ?>

</p>
