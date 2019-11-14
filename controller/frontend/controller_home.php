<?php 
	class controller_home{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_home.php";
		}
	}
	new controller_home();
 ?>