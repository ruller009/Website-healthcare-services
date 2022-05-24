<?php
class Login_SignupModel extends DB{
	
	public function login_user($username, $password){
		$qr =" select customer_username, password from customer where customer_username ='$username' ";
		$res = pg_query($this->connect,$qr);
		$num = pg_num_rows($res);
		if ($num == 0){
			return $return = 1;
		}else{
			$row = pg_fetch_array($res);
			if (password_verify($password, $row['password'])){
				$_SESSION["username"]=$row["customer_username"];
				return $return = 2 ;
			}
			else{
				return $return = 3;
			}
		}
		
	}

	public function login_staff($username, $password){
		$qr =" select staff_username, password , position from staff where staff_username ='$username' and password = '$password' ";
		$res = pg_query($this->connect,$qr);
		$num = pg_num_rows($res);
		if ($num > 0){
			$row = pg_fetch_array($res);
			$_SESSION["username"]=$row["staff_username"];
			$_SESSION["position"] = $row["position"];
			return true;
		}else{
			return false;
		}
	}
	public function register($username,$name, $password, $date_of_birth, $address, $phone, $email, $nation){
		$qr = "insert into customer(customer_username,customer_name, password, date_of_birth, address, phone, email, nationality) values ('$username','$name', '$password','$date_of_birth', '$address', '$phone', '$email', '$nation' )";
		pg_query($this->connect,$qr);
	}

	public function checkUsername($username){
		$qr = "select customer_username from customer where customer_username = '$username'";
		$run = pg_query($this->connect, $qr);
		$check = 0;
		if (pg_num_rows($run) >0){
			$check = 1;
		}
		return $check;
	}
}