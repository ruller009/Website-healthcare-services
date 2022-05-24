<div class="row header" >
	<div class="cell">
		Name
	</div>
	<div class="cell">
		Address
	</div>
	<div class="cell">
		Phone
	</div>
	<div class="cell">
		Email
	</div>
</div>

<?php while($row = pg_fetch_array($data['reply'])){
	require('E:/xampp/htdocs/prj2/View/tools/position2-manageCustomer-unit-View.php');
} ?>