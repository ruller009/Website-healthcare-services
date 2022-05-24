<?php 
class Ajax extends Controller{
	public function Basic(){
		
	}
	public function checkUser(){
		$checkuser = $_POST['warn'];
		$res = $this->model("Login_SignupModel")->checkUsername($checkuser);
		if ($res == 1){
			echo "username đã tồn tại";
		}
	}
	########################################
	public function search_medicine(){
		$medicine_search = $_POST['medicine'];
		$reply = $this->model('searchModel')->search_medicine($medicine_search);
		$this->view('search/medicine-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_clinic(){
		$clinic_search = $_POST['clinic'];
		$reply = $this->model('searchModel')->search_clinic($clinic_search);
		$this->view('search/clinic-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_doctor(){
		$doctor_search = $_POST['doctor'];
		$reply = $this->model('searchModel')->search_doctor($doctor_search);
		$this->view('search/doctor-ajax-View',[
			'reply' => $reply
		]);
	}


	public function search_staff(){
		$staff_search = $_POST['staff'];
		$reply = $this->model('searchModel')->search_staff($staff_search);
		$this->view('search/staff-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_medicineManage(){
		$medicine_search = $_POST['medicine'];
		$reply = $this->model('searchModel')->search_medicine($medicine_search);
		$this->view('tools/medicine-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_clinicManage(){
		$clinic_search = $_POST['clinic'];
		$reply = $this->model('searchModel')->search_clinic($clinic_search);
		$this->view('tools/clinic-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_doctorManage(){
		$doctor_search = $_POST['doctor'];
		$reply = $this->model('searchModel')->search_doctor($doctor_search);
		$this->view('tools/doctor-ajax-View',[
			'reply' => $reply
		]);
	}

	public function search_customer(){
		$customer_search = $_POST['customer'];
		$reply = $this->model('searchModel')->search_customer($customer_search);
		$this->view('search/customer-ajax-View',[
			'reply' => $reply
		]);
	}
}