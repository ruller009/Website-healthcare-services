<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<b style="font-size: 40px; color: black"><i><?php echo $row['customer_name']; ?></i></b><br><br>
		<div>
			<a href="https://localhost/prj2/Staff/deleteCustomer/<?php echo $row['customer_username']; ?>" style="color: orange;" id="delete">Delete</a>
		</div><br><br>
		
		<div>
			<a href="https://localhost/prj2/Staff/Customer_showmore/<?php echo $row['customer_username']; ?>" style="color: blue;">More</a>
		</div>


	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['address']; ?>
	</div>
	<div class="cell" data-title="Job Title" align="center">
		<?php echo $row['phone']; ?>
	</div>
	<div class="cell" data-title="Location">
		<?php echo $row['email']; ?>
	</div>
</div>