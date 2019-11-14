<?php 
	class controller_tutor{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_tutor.php";
		}
	}
	new controller_tutor();
 ?>