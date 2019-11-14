<?php 
	class controller_edit_class{
		public $model;
		public function __construct(){
			$this->model = new model();
			$c_email = $_SESSION["c_email"];
			$user = $this->model->get_a_record("select * from tbl_user where c_email = '$c_email' ");
			$id_user = $user->pk_user_id;
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:'';
			switch($act){
				case 'edit':
					$form_action = "index.php?controller=edit_class&act=do_edit&id=$id";
					$record = $this->model->get_a_record("select * from tbl_class where pk_class_id = $id");
					//load view 
					
				break;
				case 'do_edit':
						$c_desc = $_POST["c_desc"];
						$fk_subject_id = $_POST["fk_subject_id"];
						$fk_level_id = $_POST["fk_level_id"];
						$c_fee = $_POST["c_fee"];
						$c_phone = $_POST["c_phone"];
						$fk_address_id = $_POST["fk_address_id"];
						$fk_user_id = $id_user;
						$c_content = $_POST["c_content"];
					// update bản ghi
					$this->model->execute("update tbl_class set c_desc = '$c_desc', fk_subject_id = '$fk_subject_id', fk_level_id = '$fk_level_id', c_fee = '$c_fee', c_phone = '$c_phone', fk_address_id = '$fk_address_id', fk_user_id = '$fk_user_id', c_content = '$c_content' where pk_class_id = $id ");

					header("location:index.php?controller=profile");
					break;
			}
			include "view/frontend/view_edit_class.php";
			
		}
	}
	new controller_edit_class();
 ?>