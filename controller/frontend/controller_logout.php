<?php 
	class controller_logout{
		public function __construct(){
			// hủy biến session
			unset($_SESSION["c_email"]);
			// đi đến trang admin
			header("location:login.php");
		}
	}
	new controller_logout();
 ?>