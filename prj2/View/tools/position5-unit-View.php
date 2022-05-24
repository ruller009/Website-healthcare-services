<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['staff_name'];  ?><br><br>
		<div>
			<a  href="https://localhost/prj2/Staff/deleteStaff/<?php echo $row['staff_username']; ?>" style="color: orange;"  id="delete">Delete</a>
		</div><br><br>
		<div>
			<a href="https://localhost/prj2/Staff/position5_showmore/<?php echo $row['staff_username'] ?>" style="color: blue;">More</a>
		</div>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['address']; ?>
	</div>
	<div class="cell" data-title="Job Title" align="center">
		<?php echo $row['phone']; ?>
	</div>
	<div class="cell" data-title="Location">
		<?php echo $row['position']; ?>
	</div>
</div>