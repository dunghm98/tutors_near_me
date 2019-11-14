<?php 
	class controller_register_tutor{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_register_tutor.php";
		}
	}
	new controller_register_tutor();
 ?>