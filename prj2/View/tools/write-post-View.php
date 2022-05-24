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
	<h1>Đăng bài</h1>
	<div>
		<form action="http://localhost/prj2/Staff/writeSolution" method="POST" class="form" enctype="multipart/form-data">
			<input type="text" readonly name="temp1" value="<?php echo $_SESSION['username'] ?>" ><br><br>

			<input type="text" readonly name="temp2" value="<?php echo $_SESSION['position'] ?>"><br>
			<div class="">
				<h2>Chuyên mục</h2>
				<select name="category" id="site">
					<option value="diseases1">Bệnh nhiễm trùng</option>
					<option value="diseases2">Bệnh nội tiết</option>
					<option value="diseases3">Bệnh tâm thần</option>
					<option value="diseases4">Bệnh hô hấp</option>
					<option value="medicine1">Thuốc tây y</option>
					<option value="medicine2">Thuốc đông y</option>
					<option value="medicine3">Thực phẩm chức năng</option>
					<option value="research">Nghiên cứu khoa học</option>
				</select>
			</div><br><br>
			
			<div class="">
				<h2>Tiêu đề </h2>
				<textarea name="title" cols="75%" rows="2%"></textarea>
			</div><br><br>

			<div class="heading-short">
				<h2>Đoạn văn giới thiệu </h2>
				<textarea name="heading" cols="75%" rows="10%"></textarea>
			</div><br><br>

			<div class="image">
				<h2>Khung upload ảnh</h2>
				<textarea name="image" cols="75%" rows="10%" id="image-upload"></textarea>
			</div><br><br><br>
			<div>
				<h3>Khung soạn thảo chi tiết bài đăng</h3>
				<textarea name="post-content" id="post-content"></textarea>
			</div><br><br><br>
			<input type="submit" name="btnWrite" value="Đăng bài">
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