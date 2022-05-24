<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<b style="font-size: 40px; color: black"><i><?php echo $row['medicine_name']; ?></i></b><br><br>
		<div><a href="https://localhost/prj2/Staff/deleteMedicine/<?php echo $row['medicine_code']; ?>" style="color: orange;" id="delete">Delete</a></div><br><br>
		<div><a href="https://localhost/prj2/Staff/updateMedicine/<?php echo $row['medicine_code']; ?>" style="color: red;" >Update</a></div><br><br>
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