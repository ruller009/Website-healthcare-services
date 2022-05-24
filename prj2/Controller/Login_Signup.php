<?php
class Login_Signup extends Controller{
	#public function __construct(){
		#
	#}
	public function Basic(){
		if (isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('login/login-top-View',[
				"title" => "Log in & Sign up"
			]);
			$this->view("login/login-form/login-table-View",[
			]);
		}
		
	}
	########################################################
	public function Login_user(){
		if (isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('login/login-top-View',[
				'title' => 'Log in as user'
			]);
			$this->view("login/login-form/login-user-View",[
			]);	
		}
		
	}
	########################################################
	public function Login_staff(){
		if (isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('login/login-top-View',[
				'title' => 'Log in as staff'
			]);
			$this->view("login/login-form/login-staff-View",[
			]);	
		}
		
	}
	
	#########################################################
	public function Signup(){

		if (isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('login/login-top-View',[
				'title' => 'Sign up a new account'
			]);
			$this->view("login/login-form/signup-View",[
			]);	
		}
		
	}
	###################################################
	public function Login_user_solution(){
		if (isset($_POST['btnLogin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$return = $this->model('Login_SignupModel')->login_user($username,$password);

			if($return == 2){
				header('Location: http://localhost/prj2/');
			}else if($return == 1){
				$this->view('login/login-top-View',[
					'title' => 'Log in as user'
				]);
				$this->view("login/login-form/login-user-View",[
					'failed' => 'tài khoản không tồn tại'
				]);

			}else{
				$this->view('login/login-top-View',[
					'title' => 'Log in as user'
				]);
				$this->view("login/login-form/login-user-View",[
					'failed' => 'sai mật khẩu'
				]);
			}
		}
	}

	#########################################
	public function Login_staff_solution(){
		if (isset($_POST['btnLogin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$return = $this->model('Login_SignupModel')->login_staff($username,$password);
			if($return){
				header('Location: http://localhost/prj2/');
			}else{
				$this->view('login/login-top-View',[
					'title' => 'Log in as staff'
				]);
				$this->view("login/login-form/login-staff-View",[
					'failed' => 'đăng kí thất bại. kiểm tra lại tài khoản mật khẩu'
				]);

			}
		}
	}
	#########################################
	
	public function Signup_solution(){

		if (isset($_POST['btnRegister'])){
			echo "da click";
			$username = $_POST['username'];
			$name = $_POST['name'];
			$password = $_POST['password'];
			$password = password_hash($password, PASSWORD_DEFAULT);
			$date_of_birth = $_POST['date-of-birth'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$nation = $_POST['nation'];

			$this->model('Login_SignupModel')->register($username, $name, $password, $date_of_birth, $address, $phone, $email, $nation);
			header('Location: https://localhost/prj2/Login_Signup/Login_user ');
		}
	}
	

	##########################################
	
	public function Logout(){
		if (isset($_SESSION['username'])){
			session_destroy();
			header('Location: http://localhost/prj2/');
		}else{
			header('Location: http://localhost/prj2/');
		}
		
	}
	

}