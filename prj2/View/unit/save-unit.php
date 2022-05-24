<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['medicine_name']; ?>
		<div class="delete">
			<a href="http://localhost/prj2/Search/delete_medicine/<?php echo $row['medicine_name']; ?>">delete</a>
		</div>	
		<div>
			<a href="http://localhost/prj2/Search/update_medicine/<?php echo $row['medicine_name']; ?>">update</a>
		</div>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['medicine_group']; ?>
	</div>
	<div class="cell" data-title="Job Title">
		<?php echo $row['medicine_type']; ?>
	</div>
	<div class="cell" data-title="Location">
		<?php echo $row['medicine_id']; ?>
	</div>
	<div class="cell">
		<a href="">More</a>
	</div>
</div>