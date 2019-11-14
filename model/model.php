<?php 
	class model{
		// get all 
		public function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Không thực hiện được truy vấn");
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		public function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Faled to query the database");
			$rows = mysqli_fetch_object($result);
			return $rows;
		}
		// execute the query
		public function execute($sql){
			global $db;
			mysqli_query($db, $sql) or die("Can not execute to the database");
			$get_insert_id = mysqli_insert_id($db);
			return $get_insert_id;
		}
		// get the number of rows
		public function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Faled to query");
			return mysqli_num_rows($result);
		}
	}
 ?>