<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['clinic_name']; ?><br><br>
		<div><a href="" style="color: blue;">Delete</a></div><br><br>
		<div><a href="" style="color: blue;">Update</a></div><br><br>
		<div><a href="https://localhost/prj2/Search/clinic_showmore/<?php echo $row['clinic_code']; ?>" style="color: blue;">More</a></div>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['clinic_address']; ?>
	</div>
	<div class="cell" data-title="Job Title">
		<?php echo $row['clinic_contact']; ?>
	</div>
	<div class="cell" data-title="Location">
		<?php echo $row['clinic_type']; ?>
	</div>
</div>