<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table">

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

					<?php while($row = pg_fetch_array($data['show'])){
					require('doctor-unit.php');
				} ?>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( function(){
		$('#key-search').keyup(function(){
			var doctor_search = $('#key-search').val();
			$.post('https://localhost/prj2/Ajax/search_doctor', {doctor: doctor_search}, function(data){
				$('.table').html(data);	
			});       
		})
	})
</script>




<!--===============================================================================================-->	
<script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo SITE_ROOT?>/Layout/search_layout/js/main.js"></script>

</body>
</html>