<?php 

session_start();
require_once 'model/model.php';


$msg = '';
if (isset($_POST['login'])){
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$rowCount = userLogin($uname, $password);
	if ($rowCount == 1) {
		$_SESSION['uname'] = $uname;  
		$_SESSION['password'] = $password;
		header("location:LOGGED IN DASHBOARD.php");
	}
	else{
		$msg="username or password invalid";
	}

}


?>