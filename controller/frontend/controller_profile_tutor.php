<?php 
	class controller_profile_tutor{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_profile_tutor.php";
		}
	}
	new controller_profile_tutor();
 ?>