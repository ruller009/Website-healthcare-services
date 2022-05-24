<div class="row header" >
	<div class="cell">
		Name
	</div>
	<div class="cell">
		Group
	</div>
	<div class="cell">
		Type
	</div>
	<div class="cell">
		Registration number
	</div>
</div>

<?php while($row = pg_fetch_array($data['reply'])){
	require('position2-manageMedicine-unit-View.php');
} ?>