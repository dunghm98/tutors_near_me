<?php 
	class controller_login{
		public $model;
		public function __construct(){
			$this->model = new model();
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				$c_email = str_replace("'", "\'", $c_email);

				$c_password = md5($c_password);
				$user = $this->model->get_a_record("select c_email, c_password from tbl_user where c_email = '$c_email' ");
				if(isset($user->c_email)){
					if($user->c_password == $c_password)
						$_SESSION["c_email"] = $c_email;
				}
				header("location:index.php");
			}
			include "view/frontend/view_login.php";

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
					case 'do_add':
						$c_fullname = isset($_POST["c_fullname"])?$_POST["c_fullname"]:"";
						$c_email = isset($_POST["c_email"])?$_POST["c_email"]:"";
						$c_password = isset($_POST["c_password"])?$_POST["c_password"]:"";
						$re_password = isset($_POST["re_password"])?$_POST["re_password"]:"";
						if($c_password==$re_password){
							$c_password = md5($c_password);
							$this->model->execute("insert into tbl_user (c_fullname,c_email,c_password) values ('$c_fullname', '$c_email', '$c_password') ");
							header("location:index.php");
						}
						else{
							echo "Mật khẩu ko trùng khớp";
						}
						
			}
		}
	}
	new controller_login();
 ?>