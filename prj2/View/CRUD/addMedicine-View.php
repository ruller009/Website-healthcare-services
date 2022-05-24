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
	<h1 align="center">Thêm 1 loại thuốc mới</h1>
	<div>
		<form action="http://localhost/prj2/Staff/addMedicineSolution" method="POST" class="form" enctype="multipart/form-data">
			<div class="">
				<input type="text" name="username" readonly value="<?php echo $_SESSION['username']; ?>"><br><br>
				<input type="text" name="position" readonly value="<?php echo $_SESSION['position']; ?>">
			</div><br><br>
			
			<div class="">
				<h2>Tên thuốc</h2>
				<textarea name="medicine-name" cols="75%" rows="2%"></textarea>
			</div><br><br>

			<div class="">
				<h2>Mã số thuốc</h2>
				<textarea name="medicine-code" cols="75%" rows="2%"></textarea>
			</div><br><br>


			<div class="image" style="width: 40%;">
				<h2>Khung upload ảnh</h2>
				<textarea  cols="75%" rows="10%" id="image-upload" name="medicine-image"></textarea>
			</div><br><br><br>

			<div class="">
				<h2>Nhóm thuốc</h2>
				<textarea  cols="75%" rows="2%" name="medicine-group"></textarea>
			</div><br><br>

			<div class="">
				<h2>Loại thuốc</h2>
				<textarea  cols="75%" rows="2%" name="medicine-type"></textarea>
			</div><br><br>

			<div class="">
				<h2>Số hiệu đăng kí</h2>
				<textarea  cols="75%" rows="2%" name="medicine-id"></textarea>
			</div><br><br>

			<div class="">
				<h2>Thành phần thuốc</h2>
				<textarea  cols="75%" rows="5%" name="ingredient"></textarea>
			</div><br><br>

			<div class="">
				<h2>Công dụng</h2>
				<textarea  cols="75%" rows="5%" name="impact"></textarea>
			</div><br><br>

			<div class="">
				<h2>Hướng dẫn sử dụng</h2>
				<textarea  cols="75%" rows="5%" name="instruction"></textarea>
			</div><br><br>

			<input type="submit" name="btnAddMedicine" value="Xác nhận">
		</form>
	</div>
	<br><br><br>
	<script >
		var editor = CKEDITOR.replace( 'post-content',{
			filebrowserBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
		var editor1 = CKEDITOR.replace( 'image-upload',{
			filebrowserBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl : 'https://localhost/prj2/Layout/write/ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'https://localhost/prj2/Layout/write/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});


	</script>
</body>
</html>