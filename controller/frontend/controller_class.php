<?php 
	class controller_class{
		public $model;
		public function __construct(){
			$this->model = new model();
			// load view
			include "view/frontend/view_class.php";
		}
	}
	new controller_class();
 ?>