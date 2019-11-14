<?php 
	// start session
	session_start();
	include "config.php";
	include "model/model.php";
	// kiểm tra xem user đã đăng nhập hay chưa
	if(isset($_SESSION["c_email"])==false)
		include "controller/frontend/controller_login.php";
	else{
		// get the values in the url
		$param_from_url = isset($_GET["controller"])?$_GET["controller"]:"home";
		$file_controller = "controller/frontend/controller_$param_from_url.php";
		include "view/frontend/master.php";
	}
 ?>