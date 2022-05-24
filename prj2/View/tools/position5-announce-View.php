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
	<h1>Viết thông báo</h1>
	<div>
		<form action="https://localhost/prj2/Staff/announceSolution" method="POST" class="form" enctype="multipart/form-data">

			<div>
				<input type="text" name="temp1" readonly value="<?php echo $_SESSION['username'] ?>"><br><br>

				<input type="text" name="temp2" readonly value="<?php echo $_SESSION['position'] ?>">
			</div>

			
			<div>
				<h3>Khung soạn thảo chi tiết bài đăng</h3>
				<textarea name="announcement" id="post-content" ></textarea>
			</div><br><br><br>
			<input type="submit" name="btnWrite" value="Đăng thông báo">
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