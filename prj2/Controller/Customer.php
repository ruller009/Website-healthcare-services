<?php 
class Customer extends Controller{
	public function __construct(){
		if (!isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else if (isset($_SESSION['position'])){
			header('Location: http://localhost/prj2/');
		}
	}
	public function Basic(){
		$this->view('unit/nav-profile-View',[
		]);
		$this->view("profile/customer-profile-View",[
			'infor' => $this->model('searchModel')->inforCustomer($_SESSION['username'])
		]);
	}
	
	public function MyTools(){
		$this->view('unit/nav-profile-View',[
		]);
		$this->view("profile/customer-tools-View",[
			'infor' => $this->model('searchModel')->inforCustomer($_SESSION['username'])
		]);
	}

	public function BMI(){
		$this->view('tools/BMI-View',[
		]);
	}

	public function sendmail(){
		$this->view('tools/customer-sendmail-View',[
		]);
	}

	public function sendmailSolution(){
		if (isset($_POST['sendEmailButton'])){
			$_SESSION['username'] = $_POST['username'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$this->model("CRUDModel")->receive($email, $message);
			header('Location: https://localhost/prj2/Customer/MyTools');
		}
	}

	public function calorieCalculator(){
		$this->view('tools/calorie-top-View',[
		]);
		$this->view('tools/calorie-calculator-View',[
		]);
	}


	###############################################3
	######## SỬA THÔNG TIN KHÁCH HÀNG
	public function customiseProfile(){
		$username = $_SESSION['username'];
		$this->view('profile/customiseProfile-View',[
			"infor" => $this->model('searchModel')->inforCustomer($username)
		]);
	}

	public function customiseProfileSolution(){
		if (isset($_POST['btnUpdate'])){
			$target = $_SESSION['username'];
			$image = $_POST['image'];
			$customer_name = $_POST['customer-name'];
			$customer_username = $_POST['customer-username'];
			$date_of_birth = $_POST['date-of-birth'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$facebook = $_POST['facebook'];
			$career = $_POST['career'];
			$nationality = $_POST['nation'];

			$this->model('CRUDModel')->updateProfileCustomer($target,$image,$customer_name,$customer_username,$date_of_birth,$address,$phone,$email,$facebook,$career,$nationality);
			header('Location: http://localhost/prj2/Customer/');

		}
		
	}

	public function note(){
		$username = $_SESSION['username'];
		$this->view('profile/noteCustomer-View',[
			"infor" => $this->model('searchModel')->inforCustomer($username)
		]);
	}

	public function noteSolution(){
		if(isset($_POST['btnUpdate'])){
			$note = $_POST['note'];

			$this->model('CRUDModel')->note($note);
			header('Location: https://localhost/prj2/Customer/MyTools');
		}
	}
}