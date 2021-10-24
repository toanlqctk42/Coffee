<?php
	include('../connection.php');
	if(isset($_POST['tablename'])&& isset($_POST['idarea'])){
		$name= $_POST['tablename'];
		$idarea = $_POST['idarea'];
		$sql = "SELECT * FROM tables WHERE TableName='$name'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			echo "0";
		}else{
			$inserttb = "INSERT INTO tables(IdTable,TableName,Status,IdArea) VALUES('','$name','0','$idarea')";
			$resulttb = mysqli_query($conn,$inserttb);
			if(isset($resulttb)){
				echo '1';
			}
		}
	}
?>