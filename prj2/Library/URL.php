<?php
class URL{
	protected $controller = "Home";
	protected $action = "Basic";
	protected $param = []; 
	function __construct(){
		//XU LY ACTION 1 
		$arr = $this -> UrlProcess();
		if(isset($arr[0])){
			if(false){
				if($arr[0]=="Staff"||$arr[0]=="Customer"){
				if(isset($_SESSION["id"])==false){
					header('Location: http://localhost/prj2/LoginSignup/');
				}
			}
			}
			if(file_exists("Controller/".$arr[0].".php")){
			$this->controller=$arr[0];
			unset($arr[0]);
			}
		}
		
		require_once "Controller/".$this->controller.".php";
		$this->controller=new $this->controller;

		//XU LY ACTION 2
		if(isset($arr[1])){
			if(method_exists($this->controller,$arr[1])){
				$this->action=$arr[1];
			}
			unset($arr[1]);
		}
		//XU LY PARAM
		$this->param = $arr?array_values($arr):[];
		
		call_user_func_array([$this->controller, $this->action],$this->param);
	}
	function UrlProcess(){
		if(	isset($_GET["url"])	){
			return explode(	"/"	,	filter_var(	trim($_GET["url"],"/")	)	);
		}
		
	}
}
?>