<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['email']; ?>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['message']; ?>
	</div>
	<div class="cell" data-title="Age">
		<div align="center"><a href="https://localhost/prj2/Staff/reply/<?php echo $row['email'] ?>/<?php echo $row['no'] ?>" style="color: red">Reply</a></div>
	</div>
</div>