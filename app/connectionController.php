<?php 
 	define("HOST","localhost");
 	define("USER","root");
 	define("PSWD","");
 	define("DBNM","netflix");

 	function connect(){
		if(isset($_POST['token']) && $_POST['token']==$_SESSION['token']){

 		$conn =new mysqli(HOST,USER,PSWD,DBNM);
 		if ($conn) {
 			return $conn;
 		}
 		return null;
	 }
	}
 ?>

