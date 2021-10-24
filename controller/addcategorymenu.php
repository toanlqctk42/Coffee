<?php
	include('../connection.php');
	if(isset($_POST['name'])){
		$cate = $_POST['name'];
		$sql = "INSERT INTO groupmenu(groupid,namegroup) VALUES('','$cate')";
		$result = mysqli_query($conn,$sql);
		if(isset($result)){
			echo '1';
		}
	}
?>