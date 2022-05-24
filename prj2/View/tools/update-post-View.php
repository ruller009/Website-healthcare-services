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
	<h1>Cập nhật</h1>
	<div>
		<?php $category = $data['category'];
		$id = $data['id']; ?>
		<form action="https://localhost/prj2/Staff/updatePostSolution/<?php echo $category; ?>/<?php echo $id; ?>" method="POST" class="form" enctype="multipart/form-data">
			
			<div class="">
				<h2>Tiêu đề </h2>
				<textarea name="title" cols="75%" rows="2%"><?php echo $data['call']['title']; ?></textarea>
			</div><br><br>

			<div class="heading-short">
				<h2>Đoạn văn giới thiệu </h2>
				<textarea name="heading" cols="75%" rows="10%"><?php echo $data['call']['heading']; ?></textarea>
			</div><br><br>

			<div class="image">
				<h2>Khung upload ảnh</h2>
				<textarea name="image" cols="75%" rows="10%" id="image-upload"><?php echo $data['call']['image']; ?></textarea>
			</div><br><br><br>
			<div>
				<h3>Khung soạn thảo chi tiết bài đăng</h3>
				<textarea name="post-content" id="post-content"><?php echo $data['call']['post_content']; ?></textarea>
			</div><br><br><br>
			<input type="submit" name="btnUpdate" value="Cập nhật">
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