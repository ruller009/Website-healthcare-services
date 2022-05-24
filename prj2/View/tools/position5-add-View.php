<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			color: 	#FF1493;
		}

		.form{
			padding: 10px;
			border-top: solid 1px #EE82EE ;
			border-bottom: solid 1px #EE82EE;
		}
		.heading-short{
			margin-bottom: 20px;
		}
	</style>
	<script type="text/javascript" src="<?php echo SITE_ROOT ?>/Layout/write/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo SITE_ROOT ?>/Layout/write/ckfinder/ckfinder.js"></script>
</head>
<body>
	<h1>Thêm một nhân viên mới vào bệnh viện</h1>
	<div>
		<form action="http://localhost/prj2/Staff/addStaffSolution" method="POST" class="form" enctype="multipart/form-data">
			
<div>
	<input type="text" name="temp1" readonly value="<?php echo $_SESSION['username'] ?>"><br><br>

	<input type="text" name="temp2" readonly value="<?php echo $_SESSION['position'] ?>">
</div>

			<div>
				<h2><label>Tài khoản nhân viên</label></h2>
				<input type="text" name="username" required>
			</div>
			

			<div>
				<h2><label>Họ tên nhân viên</label></h2>
				<input type="text" name="name" required>
			</div>
			<div>
				<h2><label>Mật khẩu</label></h2>
				<input type="text" name="password" required>
			</div>

			<div>
				<h2><label>Vị trí</label></h2>
				<select name="position">
					<option value="1">Thực tập sinh</option>
					<option value="2">Y Tá</option>
					<option value="3">Kĩ Thuật Viên</option>
					<option value="4">Giáo sư</option>
				</select>
			</div><br><br>

			<input type="submit" name="btnAddStaff" value="Thêm nhân viên">
		</form>
	</div>
	<br><br><br>
	
</body>
</html>