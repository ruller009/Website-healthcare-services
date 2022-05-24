<div class="row header" >
	<div class="cell">
		Name
	</div>
	<div class="cell">
		Address	
	</div>
	<div class="cell">
		Contact
	</div>
	<div class="cell">
		Type
	</div>
</div>

<?php while($row = pg_fetch_array($data['reply'])){
	require('position2-manageClinic-unit-View.php');
} ?>