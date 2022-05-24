<?php
class Search extends Controller{
	############ BẢNG SEARCH LỰA CHỌN
	public function Basic(){
		$this->view("search/search-basic-View",[
		]);
	}

	############# BẢNG SEARCH MEDICINE
	public function medicine_search(){
		$show = $this->model('searchModel')->show_medicine();
		$this->view('search/search-top-View',[
			'name' => 'Medicine'
		]);
		$this->view('search/medicine-display-View',[
			"show" => $show
		]);
	}

	public function medicine_showmore($medicine_code){
		$this->view('search/medicine-showmore-View',[
			'medicine_showmore' =>$this->model('SearchModel')->showmore_medicine($medicine_code)
		]);
	}
	############# BẢNG SEARCH CLINIC

	public function clinic_search(){
		$show = $this->model('searchModel')->show_clinic();
		$this->view('search/search-top-View',[
			'name' => 'Clinic'
		]);
		$this->view('search/clinic-display-View',[
			"show" => $show
		]);
	}

	public function clinic_showmore($clinic_code){
		$this->view('search/clinic-showmore-View',[
			'clinic_showmore' =>$this->model('SearchModel')->showmore_clinic($clinic_code)
		]);
	}
	############# BẢNG SEARCH DOCTOR

	public function doctor_search(){
		$show = $this->model('searchModel')->show_doctor();
		$this->view('search/search-top-View',[
			'name' => 'Doctor'
		]);
		$this->view('search/doctor-display-View',[
			"show" => $show
		]);
	}

	public function doctor_showmore($doctor_name){
		$this->view('search/doctor-showmore-View',[
			'doctor_showmore' =>$this->model('SearchModel')->showmore_doctor($doctor_name)
		]);
	}
	########################################################################
	


















	public function add_medicine(){
		if (isset($_POST["btnMedicine"]) ){
			echo "hihi";
			$medicine_name = $_POST['medicine-name'];
			$medicine_group = $_POST['medicine-group'];
			$medicine_type = $_POST['medicine-type'];
			$medicine_id = $_POST['medicine-id'];
			$this->model("CRUDModel")->add_medicine($medicine_name, $medicine_group, $medicine_type, $medicine_id) ;
		}
		else{
			echo "chua nhap gi";
		}
	}

	public function update_medicine($medicine_name){
		$this->view('search/update-medicine-View',[
			"reply" =>$this->model('searchModel')->search_medicine($medicine_name)
		]);
	}

	public function update_medicine_solution(){
		if (isset($_POST['btnUpdate'])){
			$medicine_name = $_POST['medicine-name'];
			$medicine_group = $_POST['medicine-group'];
			$medicine_type = $_POST['medicine-type'];
			$medicine_id = $_POST['medicine-id'];
			echo $medicine_id;
			$this->model("searchModel")->update_medicine($medicine_name, $medicine_group, $medicine_type, $medicine_id) ;
		}
	}

	public function ajax(){
		$this->view('search/basic-result',[
		]);
		$this->view('search/search-View',[
			"medicine-search" => $this->model("searchModel")->show_medicine()
		]);
	}

	public function delete_medicine($medicine_name){
		$this->model("CRUDModel")->delete_medicine($medicine_name);
	}

	public function show(){
		$this->view('search/search-View',[
			"medicine-search" => $this->model("searchModel")->search_medicine()
		]);
	}

	###################################################
	
}