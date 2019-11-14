 <?php 
	class controller_register_class{
		public $model;
		public function __construct(){
			$this->model = new model();

				$c_email = $_SESSION["c_email"];
				$user = $this->model->get_a_record("select * from tbl_user where c_email = '$c_email' ");
				$id_user = $user->pk_user_id;
				
				if($_SERVER["REQUEST_METHOD"] == "POST"){
						$c_desc = $_POST["c_desc"];
						$fk_subject_id = $_POST["fk_subject_id"];
						$fk_level_id = $_POST["fk_level_id"];
						$c_fee = $_POST["c_fee"];
						$c_phone = $_POST["c_phone"];
						$fk_address_id = $_POST["fk_address_id"];
						$fk_user_id = $id_user;
						$c_content = $_POST["c_content"];
					
						// insert bản ghi
						$this->model->execute("insert into tbl_class(c_desc, fk_subject_id, fk_level_id,c_fee,c_phone, fk_address_id, fk_user_id, c_content) values('$c_desc',$fk_subject_id, $fk_level_id,$c_fee, '$c_phone', $fk_address_id, $fk_user_id, '$c_content') ");
						header("location:index.php");
			}
			include "view/frontend/view_register_class.php";
		}
	}
 	new controller_register_class();
 ?>