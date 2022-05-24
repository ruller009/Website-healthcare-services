<?php $reply = $data['reply']; ?>
<form method="post" action="https://localhost/prj2/Search/update_medicine_solution">
	<label>Tên thuốc</label>
	<input type="text" name="medicine-name" value="<?php echo $reply['medicine_name']; ?>">
	<label>Nhóm thuốc</label>
	<input type="text" name="medicine-group" value="<?php echo $reply['medicine_group']; ?>">
	<label>Loại thuốc</label>
	<input type="text" name="medicine-type" value="<?php echo $reply['medicine_type']; ?>">
	<label>Số hiệu đăng kí</label>
	<input type="text" name="medicine-id" value="<?php echo $reply['medicine_id']; ?>">
	<input type="submit" name="btnUpdate" value="Update">
</form>