<?php 
class Staff extends Controller{
	
	public function __construct(){
		if (!isset($_SESSION['username'])){
			header('Location: http://localhost/prj2/');
		}else{
			if(!isset($_SESSION['position'])){
				header('Location: http://localhost/prj2/');	
			}
		}
	}
	
	public function Basic(){
		$this->view('unit/nav-profile-View',[
		]);
		$this->view("profile/staff-profile-View",[
			'infor' => $this->model('searchModel')->inforStaff($_SESSION['username'])
		]);
	}


	public function MyTools(){
		$this->view('unit/nav-profile-View',[
		]);
		$this->view("profile/staff-tools-View",[
			'infor' => $this->model('searchModel')->inforStaff($_SESSION['username'])
		]);
	}

	#<-------------------------------------------------------------------------------------------------------->
	#<-------------------------------------------------------------------------------------------------------->
	#     POSITION 5
	public function announce(){
		if ($_SESSION['position']!='5'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/tools-write-View",[
				'title' => 'Đăng thông báo'
			]);

			$this->view('tools/position5-announce-View',[
			]);
		}
		
	}

	public function manage(){
		if ($_SESSION['position']!='5'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/position5-manage-top-View',[
			]);
			$this->view('tools/position5-manage-display-View',[
				'show' => $this->model('searchModel')->show_staff()
			]);
		}
		
	}
	public function position5_showmore($staff_username){
		if ($_SESSION['position']!='5'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/position5-showmore-View',[
				"staff_showmore" => $this->model('searchModel')->showmore_staff($staff_username)
			]);
		}
		
	}
	public function position5_add(){
		if ($_SESSION['position']!='5'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/tools-write-View",[
				'title' => 'Thêm nhân viên mới'
			]);
			$this->view('tools/position5-add-View',[
			]);
		}
		
	}


	public function announceSolution(){
		if(isset($_POST['btnWrite'])){

			$_SESSION['username'] = $_POST['temp1'];
			$_SESSION['position'] = $_POST['temp2'];

			$announcement = $_POST['announcement'];

			$this->model('CRUDModel')->addAnnouncement($announcement);
			header('Location: http://localhost/prj2/');
		}else{
			header('Location: http://localhost/prj2/');
		}
	}



	public function addStaffSolution(){
		if (isset($_POST["btnAddStaff"])) {

			$_SESSION['username'] = $_POST['temp1'];
			$_SESSION['position'] = $_POST['temp2'];

			$username = $_POST["username"];
			$name = $_POST['name'];

			$password = $_POST["password"];
			$position = $_POST["position"];
			$this->model("CRUDModel")->addStaff($username, $name, $password, $position);
			header('Location: https://localhost/prj2/Staff/manage');
		}else{
			header('Location: https://localhost/prj2/');
		}
	}

	public function deleteStaff($staff_username){
		if ($_SESSION['position']!='5'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->model('CRUDModel')->deleteStaff($staff_username);
			header('Location: https://localhost/prj2/Staff/manage');

		}
	}
	#<-------------------------------------------------------------------------------------------------------->
	#<-------------------------------------------------------------------------------------------------------->
	#     POSITION 4
	public function write(){
		if ($_SESSION['position']!='4'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/tools-write-View",[
				'title' => 'Viết bài'
			]);
			$this->view("tools/write-post-View",[
			]);
		}
		
	}

	public function writeSolution(){
		if (isset($_POST["btnWrite"])) {
			$_SESSION['username'] = $_POST['temp1'];
			$_SESSION['position'] = $_POST['temp2'];
			$category = $_POST["category"];
			$title = $_POST["title"];
			$heading = $_POST["heading"];
			$image = $_POST["image"];
			$post_content = $_POST["post-content"];
			$this->model("postModel")->write($category, $title, $heading, $image, $post_content);
			header('Location:https://localhost/prj2/ShowPost/Basic/'.$category.'/1');
			exit();
		}
	}

	public function listpost($category='diseases1'){
		if ($_SESSION['position']!='4'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/position4-listpost-View",[
				'category' => $category
			]);
			$this->view("tools/position4-listpost-body-View",[
				"list" => $this->model("postModel")->listpost($category),
				"category" => $category
			]);
		}
		
	}

	public function deletePost($category, $no){
		if ($_SESSION['position']!='4'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->model('postModel')->deletePost($category, $no);
			header('Location:https://localhost/prj2/Staff/listpost/'.$category);
		}
		
	}

	public function updatePost($category, $id){
		if ($_SESSION['position']!='4'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/update-post-View',[
				'category' => $category,
				'id' => $id,
				'call' => $this->model('postModel')->callPost($category, $id)
			]);
		}
		
	}

	public function updatePostSolution($category, $id){
		if (isset($_POST["btnUpdate"])) {
			$title = $_POST["title"];
			$heading = $_POST["heading"];
			$image = $_POST["image"];
			$post_content = $_POST["post-content"];

			$this->model("postModel")->updatePost($category, $id, $title, $heading, $image, $post_content);
			header('Location: https://localhost/prj2/Staff/listpost/'.$category);
		}
	}
	#<-------------------------------------------------------------------------------------------------------->
	#<-------------------------------------------------------------------------------------------------------->
	#     POSITION 2


	public function manageMedicine(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$show = $this->model('searchModel')->show_medicine();
			$this->view('tools/tools-manage-top-View',[
				'name' => 'Quản lý danh sách thuốc',
				'search' => 'Tìm kiếm tên thuốc',
				'link' => 'https://localhost/prj2/Staff/addMedicine',
				'what' => 'thuốc mới'
			]);
			$this->view('tools/position2-manageMedicine-display-View',[
				"show" => $show
			]);
		}
		
	}

	public function manageClinic(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$show = $this->model('searchModel')->show_clinic();
			$this->view('tools/tools-manage-top-View',[
				'name' => 'Quản lý danh sách phòng khám',
				'search' => 'Tìm kiếm tên phòng khám',
				'link' => 'https://localhost/prj2/Staff/addClinic',
				'what' => 'phòng khám mới'
			]);
			$this->view('tools/position2-manageClinic-display-View',[
				"show" => $show
			]);
		}
		
	}

	public function manageDoctor(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$show = $this->model('searchModel')->show_doctor();
			$this->view('tools/tools-manage-top-View',[
				'name' => 'Quản lý danh sách bác sĩ',
				'search' => 'Tìm kiếm tên bác sĩ',
				'link' => 'https://localhost/prj2/Staff/addDoctor',
				'what' => 'bác sĩ mới'
			]);
			$this->view('tools/position2-manageDoctor-display-View',[
				"show" => $show
			]);
		}
		
	}

	public function addMedicine(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/tools-write-View",[
				'title' => 'Thêm 1 loại thuốc mới'
			]);
			$this->view('CRUD/addMedicine-View',[
			]);
		}
		
	}

	public function addMedicineSolution(){
		if(isset($_POST['btnAddMedicine'])){

			$_SESSION['username'] = $_POST['username'];
			$_SESSION['position'] = $_POST['position'];


			$medicine_name = $_POST['medicine-name'];
			$medicine_code = $_POST['medicine-code'];
			$medicine_image = $_POST['medicine-image'];
			$medicine_group = $_POST['medicine-group'];
			$medicine_type = $_POST['medicine-type'];
			$medicine_id = $_POST['medicine-id'];
			$ingredient = $_POST['ingredient'];
			$impact = $_POST['impact'];
			$instruction = $_POST['instruction'];
			$this->model('CRUDModel')->add_medicine($medicine_name,$medicine_code,$medicine_image,$medicine_group,$medicine_type,$medicine_id,$ingredient,$impact,$instruction);
			header('Location: https://localhost/prj2/Staff/manageMedicine');
		}
		
	}
	
	public function addClinic(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("tools/tools-write-View",[
				'title' => 'Thêm 1 phòng khám mới'
			]);
			$this->view('CRUD/addClinic-View',[
			]);
		}
		
	}

	public function addClinicSolution(){

	}

	public function addDoctor(){
		$this->view("tools/tools-write-View",[
			'title' => 'Thêm 1 bác sĩ mới'
		]);
		$this->view('CRUD/addDoctor-View',[
		]);
	}

	public function addDoctorSolution(){

	}

	public function deleteMedicine($medicine_code){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->model('CRUDModel')->deleteMedicine($medicine_code);
		}
		
	}


	public function updateMedicine($medicine_code){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view("CRUD/updateMedicine-View",[
				'medicine_code' => $medicine_code,
				'infor' => $this->model('searchModel')->showmore_medicine($medicine_code)
			]);

		}
	}

	public function updateMedicineSolution($medicine_code_current){
		if (isset($_POST['btnUpdate'])){
			$medicine_name = $_POST['medicine-name'];
			$medicine_code = $_POST['medicine-code'];
			$medicine_image = $_POST['medicine-image'];
			$medicine_group = $_POST['medicine-group'];
			$medicine_type = $_POST['medicine-type'];
			$medicine_id = $_POST['medicine-id'];
			$ingredient = $_POST['ingredient'];
			$impact = $_POST['impact'];
			$instruction = $_POST['instruction'];

			$this->model('CRUDModel')->updateMedicine($medicine_code_current,$medicine_name,$medicine_code,$medicine_image,$medicine_group,$medicine_type,$medicine_id,$ingredient,$impact,$instruction);
			header('Location: https://localhost/prj2/Staff/manageMedicine');
		}
	}

	public function updateClinic(){

	}

	public function updateDoctor(){

	}


	##################### QUẢN LÝ BỆNH NHÂN
	public function manageCustomer(){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$show = $this->model('searchModel')->show_customer();
			$this->view('tools/customer-manage-top-View',[
				'name' => 'Quản lý khách hàng',
				'search' => 'Tìm kiếm tên khách hàng',
				'link' => 'https://localhost/prj2/Staff/addCustomer',
				'what' => 'khách hàng mới'
			]);
			$this->view('tools/position2-manageCustomer-display-View',[
				"show" => $show
			]);
		}
		
	}




	public function deleteCustomer($customer_username){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->model('CRUDModel')->deleteCustomer($customer_username);
			header('Location: https://localhost/prj2/Staff/manageCustomer');
		}
		
	}

	public function Customer_showmore($customer_username){
		if ($_SESSION['position']!='2'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/customer-showmore-View',[
				"customer_showmore" => $this->model('searchModel')->showmore_customer($customer_username)
			]);
		}
		
	}





	#############################################
	#############################################
	#   POSITION 1 : GỬI NHẬN EMAIL
	public function showEmail(){
		if ($_SESSION['position']!='1'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/position1-top-View',[
			]);
			$this->view('tools/position1-showEmail-View',[
				'list' => $this->model('searchModel')->searchEmail()
			]);
		}
		
	}

	public function reply($email, $no){
		if ($_SESSION['position']!='1'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/mail/reply-View',[
				"email" => $email,
				"no" => $no
			]);

		}
	}

	public function replySolution(){
		if ($_SESSION['position']!='1'){
			header('Location: http://localhost/prj2/');
		}else{
			$this->view('tools/mail/replyMailSolution',[
			]);
		}
		
	}

	
}