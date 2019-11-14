<?php 
	class controller_class_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_class_detail.php";
		}
	}
	new controller_class_detail();
 ?>