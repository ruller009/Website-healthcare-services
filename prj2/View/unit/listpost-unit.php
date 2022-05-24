<div class="row"  id="here">
	<div class="cell" data-title="Full Name">
		<?php echo $row['id']; $id = $row['id']; $category = $data['category']; $no = $row['no']?>
	</div>
	<div class="cell" data-title="Age">
		<?php echo $row['title']; ?>
	</div>
	<div class="cell" data-title="Age" align="center">
		<div ><a href="https://localhost/prj2/ShowPost/show_detail/<?php echo $category ?>/<?php echo $id ?>" style="color: red">Show more</a></div><br><br>
		<div ><a href="https://localhost/prj2/Staff/deletePost/<?php echo $category ?>/<?php echo $no ?>" style="color: blue">Delete</a></div><br><br>
		<div ><a href="https://localhost/prj2/Staff/updatePost/<?php echo $category ?>/<?php echo $id ?>" style="color: orange">Update</a></div>
	</div>
</div>