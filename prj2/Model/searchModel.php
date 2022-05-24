<?php 
class searchModel extends DB{

	public function announce(){
		$qr = " select max(no) from announcement ";
		$run = pg_query($this -> connect,$qr);
		$res = pg_fetch_array($run);
		$max = $res['max'];
		$qr = " select announcement from announcement where no = $max ";
		$run = pg_query($this -> connect,$qr);
		$res = pg_fetch_array($run);
		return $announce = $res['announcement'];
	}

	public function show_medicine(){
		$qr = " select * from medicine_search ";
		$res = pg_query($this -> connect,$qr);
		return $res;
	}

	public function search_medicine($medicine_name){
		$qr = " select * from medicine_search where medicine_name like '%$medicine_name%' ";
		$res = pg_query($this -> connect,$qr);
		return $res;
	}

	public function showmore_medicine($medicine_code){
		$qr = "select * from medicine_search where medicine_code = '$medicine_code' ";
		$run = pg_query($this -> connect,$qr);
		return $res = pg_fetch_array($run);
	}






	############################################################

	public function show_clinic(){
		$qr = " select * from clinic ";
		$res = pg_query($this -> connect,$qr);
		return $res;
	}

	public function search_clinic($clinic_name){
		$qr = " select * from clinic where clinic_name like '%$clinic_name%' ";
		$res = pg_query($this -> connect,$qr);
		return $res;
	}

	public function showmore_clinic($clinic_code){
		$qr = "select * from clinic where clinic_code = '$clinic_code' ";
		$run = pg_query($this -> connect,$qr);
		return $res = pg_fetch_array($run);
	}






	############################################################
	public function show_doctor(){
		$qr = " select * from doctor ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function search_doctor($doctor_name){
		$qr = " select * from doctor where doctor_name like '%$doctor_name%' ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function showmore_doctor($doctor_code){
		$qr = "select * from doctor where doctor_code = '$doctor_code' ";
		$run = pg_query($this->connect,$qr);
		return $res = pg_fetch_array($run);
	}






	############################################################
	public function show_customer(){
		$qr = " select * from customer ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function search_customer($customer_name){
		$qr = " select * from customer where customer_name like '%$customer_name%' ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function showmore_customer($customer_username){
		$qr = "select * from customer where customer_username = '$customer_username' ";
		$run = pg_query($this->connect,$qr);
		return $res = pg_fetch_array($run);
	}

	############################################################





	public function show_staff(){
		$qr = " select * from staff ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function search_staff($staff_name){
		$qr = " select * from staff where staff_name like '%$staff_name%' ";
		$res = pg_query($this->connect,$qr);
		return $res;
	}

	public function showmore_staff($staff_username){
		$qr = "select * from staff where staff_username = '$staff_username' ";
		$run = pg_query($this->connect,$qr);
		return $res = pg_fetch_array($run);
	}

	##################################################
	############3 SEARCH EMAIL
	public function searchEmail(){
		$qr = " select * from email ";
		$run = pg_query($this->connect, $qr);
		return $run;
	}

	###############################3
	########## GỌI VỀ THÔNG TIN KHÁCH HÀNG
	public function inforCustomer($customer_username){
		$qr = " select * from customer where customer_username = '$customer_username' ";
		$run = pg_query($this->connect, $qr);
		return $res = pg_fetch_array($run);
	}
	
	##################################
	############ GỌI VỀ THÔNG TIN NHÂN VIÊN
	public function inforStaff($staff_username){
		$qr = " select * from staff where staff_username = '$staff_username' ";
		$run = pg_query($this->connect, $qr);
		return $res = pg_fetch_array($run);
	}
}