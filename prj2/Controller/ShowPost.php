<?php 
class ShowPost extends Controller{
	
	public function Basic($category='diseases1', $page=1){

		if ($category!='diseases1'&&$category!='diseases2'&&$category!='diseases3'&&$category!='diseases4'&&$category!='medicine1'&&$category!='medicine2'&&$category!='medicine3'&&$category!='research'){
			$category = 'diseases1';
		}

		if($category=='diseases1'){
			$title = 'Bệnh truyền nhiễm';
		}else if($category=='diseases2'){
			$title = 'Bệnh nội tiết';
		}else if($category=='diseases3'){
			$title = 'Bệnh tâm thần';
		}else if($category=='diseases4'){
			$title = 'Bệnh hô hấp';
		}else if($category=='medicine1'){
			$title = 'Thuốc tây y';
		}else if($category=='medicine2'){
			$title = 'Thuốc đông y';
		}else if($category=='medicine3'){
			$title = 'Thực phẩm chức năng';
		}else if($category=='research'){
			$title = 'Nghiên cứu khoa học';
		}


		$save = $this->model("postModel")->post_table($category, $page);
		$this->view("showpost/post-table-View",[
			'title' => $title,
			"save" => $save,
			"category" => $category,
			"page-index" => $page
		]);
	}

	public function show_detail($category, $id){
		if($category=='diseases1'){
			$title = 'Bệnh truyền nhiễm';
		}else if($category=='diseases2'){
			$title = 'Bệnh nội tiết';
		}else if($category=='diseases3'){
			$title = 'Bệnh tâm thần';
		}else if($category=='diseases4'){
			$title = 'Bệnh hô hấp';
		}else if($category=='medicine1'){
			$title = 'Thuốc tây y';
		}else if($category=='medicine2'){
			$title = 'Thuốc đông y';
		}else if($category=='mediicine3'){
			$title = 'Thực phẩm chức năng';
		}else if($category=='research'){
			$title = 'Nghiên cứu khoa học';
		}
		$this->view('showpost/post-detail-View',[
			'title' => $title,
			'content' => $this->model('postModel')->show_post_detail($category, $id)
		]);
	}
}