<?php 
class CRUDModel extends DB{
	public function add_medicine($medicine_name,$medicine_code,$medicine_image,$medicine_group,$medicine_type,$medicine_id,$ingredient,$impact,$instruction){
		$qr = "insert into medicine_search (medicine_name,medicine_code,medicine_image,medicine_group,medicine_type,medicine_id,ingredient,impact,instruction) values ('$medicine_name', '$medicine_code','$medicine_image', '$medicine_group', '$medicine_type', '$medicine_id','$ingredient','$impact','$instruction')";
		pg_query($this->connect,$qr);
	}

	public function deleteMedicine($medicine_code){
		$qr = "delete from medicine_search where medicine_code = '$medicine_code'";
		pg_query($this->connect, $qr);
		header('location: http://localhost/prj2/Staff/manageMedicine ');
	}
	
	
	public function updateMedicine($medicine_code_current,$medicine_name,$medicine_code,$medicine_image,$medicine_group,$medicine_type,$medicine_id,$ingredient,$impact,$instruction){
		$qr = "update medicine_search set medicine_name = '$medicine_name',medicine_code = '$medicine_code',medicine_image='$medicine_image', medicine_group = '$medicine_group', medicine_type = '$medicine_type', medicine_id = '$medicine_id',ingredient='$ingredient',impact ='$impact',instruction ='$instruction' where medicine_code = '$medicine_code_current' ";
		pg_query($this->connect,$qr);
	}

	####################################################################3
	###### POSITION 5
	public function addStaff($username,$name, $password, $position){
		$qr = "insert into staff (staff_username, staff_name, password, position) values ('$username','$name', '$password', '$position') ";
		pg_query($this->connect,$qr);
	}

	public function addAnnouncement($announcement){
		$qr = " insert into announcement (announcement) values ('$announcement') ";
		pg_query($this->connect, $qr);
	}

	public function deleteStaff($staff_username){
		$qr = " delete from staff where staff_username = '$staff_username' ";
		pg_query($this->connect, $qr);
	}

	##################################################################
	### THÊM EMAIL VÀO CƠ SỞ DỮ LIỆU
	public function receive($email, $message){
		$qr = " insert into email (email, message) values ('$email', '$message') ";
		pg_query($this->connect,$qr);
	}

	####################################################################
	##### NOTE FOR CUSTOMER
	public function note($note){
		$username = $_SESSION['username'];
		$qr = "  update customer set note = '$note' where customer_username = '$username' ";
		pg_query($this->connect,$qr);
	}

	########################################################################
	############ CHỈNH SỬA PROFILE CỦA CUSTOMER
	public function updateProfileCustomer($target,$image,$customer_name,$customer_username,$date_of_birth,$address,$phone,$email,$facebook,$career,$nationality){

		$qr = " update customer set customer_username = '$customer_username', customer_name = '$customer_name', date_of_birth = '$date_of_birth' , address = '$address', phone = '$phone', email = '$email', img_profile = '$image', facebook = '$facebook', career = '$career', nationality = '$nationality' where customer_username = '$target'  ";
		pg_query($this->connect,$qr);
	}

	###################################################################
	##############3 CRUD KHÁCH HÀNG
	public function deleteCustomer($customer_username){
		$qr = " delete from customer where customer_username = '$customer_username' ";
		pg_query($this->connect,$qr);
		
	}

}