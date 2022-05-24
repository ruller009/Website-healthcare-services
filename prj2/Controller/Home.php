<?php
class Home extends Controller{
	public function Basic(){
		$this->view("front_end/home-View",[
			'announce' => $this->model('searchModel')->announce()
		]);
	}
}