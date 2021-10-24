<?php
session_start();
include('connection.php');
if(isset($_POST['user']) && isset($_POST['pass'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE UserId = '$user' AND Pass= '$pass'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$_SESSION['uid'] = $user;
		echo '1';
	}else{
		echo '2';
	}
}else{
	echo '3';
}
?>