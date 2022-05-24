<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['doctor_name']; ?><br><br>
		<div><a href="" style="color: blue;">Delete</a></div><br><br>
		<div><a href="" style="color: blue;">Update</a></div><br><br>
		<div><a href="https://localhost/prj2/Search/doctor_showmore/<?php echo $row['doctor_code']; ?>" style="color: blue;">More</a></div>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['specialist']; ?>
	</div>
	<div class="cell" data-title="Job Title">
		<?php echo $row['doctor_contact']; ?>
	</div>
	<div class="cell" data-title="Location">
		<?php echo $row['agency']; ?>
	</div>
</div>