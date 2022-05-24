<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['medicine_name']; ?>
		<div><a href="https://localhost/prj2/Search/medicine_showmore/<?php echo $row['medicine_code']; ?>" style="color: blue;">More</a></div>
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
</div>