<?php 
class News extends Controller{
	public function Basic($page = 1){
		$post_max = $this->model("postModel")->post_max();
		$this->view("front_end/post-table-View",[
			"post_max" => $post_max,
			"save" => $this->model("postModel")->post_table_data($post_max)
		]);
	}
	public function NewsDetail($id){
		$this->view("front_end/post-detail-View",[
			"id" => $id,
			"news_detail" => $this->model("postModel")->news_detail($id)
		]);
	}
}