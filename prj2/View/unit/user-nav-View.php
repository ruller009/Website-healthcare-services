<?php if(isset($_SESSION['position'])){
	$basic = 'http://localhost/prj2/Staff/';
	$tool = 'http://localhost/prj2/Staff/MyTools';
}else{
	$basic = 'http://localhost/prj2/Customer/';
	$tool = 'http://localhost/prj2/Customer/MyTools';
} ?>
<div class="nav-item dropdown">

	<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Welcome <?php echo $_SESSION['username']; ?></a>
	<div class="dropdown-menu">
		<a href="<?php echo $basic ?>" class="dropdown-item">My Profile</a>
		<a href="<?php echo $tool ?>" class="dropdown-item">My Tools</a>
		<a href="https://localhost/prj2/Login_Signup/Logout" class="dropdown-item">Log out</a>
	</div>
</div>