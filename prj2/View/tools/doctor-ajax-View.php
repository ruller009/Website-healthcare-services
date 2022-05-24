<div class="row header" >
	<div class="cell">
		Name
	</div>
	<div class="cell">
		Specialist	
	</div>
	<div class="cell">
		Contact
	</div>
	<div class="cell">
		Agency
	</div>
</div>

<?php while($row = pg_fetch_array($data['reply'])){
	require('position2-manageDoctor-unit-View.php');
} ?>