<?php 
	class controller_list_tutor{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_list_tutor.php";
		}
	}
	new controller_list_tutor();
 ?>