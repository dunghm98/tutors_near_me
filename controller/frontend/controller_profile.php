<?php 
	class controller_profile{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"])? $_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->model->execute("delete from tbl_class where pk_class_id = $id");
					// quay lại trang user
					header("location:index.php?controller=profile");
				break;
			}
			include "view/frontend/view_profile.php";
		}
	}
	new controller_profile();
 ?>