<?php 
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
if (isset($_POST['btnReply'])){

	$no = $_POST['no'];
	$toEmail = $_POST['email'];
	$body = $_POST['body'];


	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "hailong29x11@gmail.com";
	$mail->Password = 'anhlaso123';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';

	$mail->isHTML(true);
	$mail->setFrom("hailong29x11@gmail.com");
	$mail->addAddress($toEmail);
	$mail->Body = $body;

	if($mail->send()){
		$status = true;
		$connect = pg_connect("host=localhost dbname=ruller user=postgres password=anhlaso1");
		pg_query($connect, "SET NAMES 'utf8'");
		$qr = " delete from email where no = '$no' ";
		pg_query($connect, $qr);
		header('Location: https://localhost/prj2/Staff/showEmail');

	}else{
		$status = false;
		echo "false";
	}
}else{
	echo "?????";
}






