<?php
	include('../connection.php');
	if(isset($_POST['codecus']) && isset($_POST['namecus'])&& isset($_POST['phonecus'])&&isset($_POST['emailcus']) && isset($_POST['addresscus']) && isset($_POST['notecus'])){
			$idcus = $_POST['codecus'];
			$namecus = $_POST['namecus'];
			$phonecus = $_POST['phonecus'];
			$emailcus = $_POST['emailcus'];
			$addresscus = $_POST['addresscus'];
			$notecus = $_POST['notecus'];
			if($idcus==''){
				$count= mysqli_query($conn,"SELECT * FROM customers");
				$resultcount= mysqli_num_rows($count)+1;
				$idcus='KH00'.$resultcount;
				$sql ="INSERT INTO customers(IdCustomer,CustomerName,PhoneNumber,Email,Address,Note,Birthday,Gender,Debit,Avatar) VALUES ('$idcus', '$namecus', '$phonecus', '$emailcus', '$addresscus', '$notecus', NULL, NULL, NULL, NULL)";
			}else{
				$count= mysqli_query($conn,"SELECT * FROM customers WHERE IdCustomer = '$idcus'");
				$resultcount= mysqli_num_rows($count);
				if($resultcount>0){
					echo '3';
				}else{
					$sql ="INSERT INTO customers(IdCustomer,CustomerName,PhoneNumber,Email,Address,Note,Birthday,Gender,Debit,Avatar) VALUES ('$idcus', '$namecus', '$phonecus', '$emailcus', '$addresscus', '$notecus', NULL, NULL, NULL, NULL)";
				}
			}
			$result = mysqli_query($conn,$sql);
			if(isset($result)){
				echo '1';
			}else{
				echo '2';
			}
	}
	else{
		echo "0";
	}
?>