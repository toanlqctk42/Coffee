<?php
	session_start();
	require_once('../connection.php');
	if(isset($_POST['data'])){
		$user = $_SESSION['uid'];
		$json =$_POST['data'];
		$sql ="SELECT * FROM bill";
		$result= mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result)+1;
		$idbill = 'DH00'.$count;
		$table_id= $json['table_id'];
		$customer_id = $json['customer_id'];
		$customer_pay = $json['customer_pay'];
		$note = $json['note'];
		$updatetable = "UPDATE tables SET Status ='1' WHERE IdTable ='$table_id'";
		$resulttable = mysqli_query($conn,$updatetable);
		$insertorder = "INSERT INTO `bill` (`IdBill`, `IdUser`, `IdTable`, `IdStore`, `IdCustomer`, `create_at`, `Sale`, `Status`, `Totalprice`, `Note`) VALUES ('$idbill', '$user', '$table_id', NULL, '$customer_id', '".$today = date("Y-m-d H:i:s")."',NULL,'0', '$customer_pay', '$note')";
		$resultoder = mysqli_query($conn,$insertorder);
		if($resultoder){
			echo "<h3>Thông báo !</h3><p>Lưu đơn hàng thành công</p>";
			foreach ($json['detai_oder'] as $value) {
				$idproduct = $value['id'];
				$quantity = $value['quantity'];
				$price = $value['price'];
				$insertdetail = "INSERT INTO billdetail (IdDetail,IdBill,IdMenu,Quantity,Price) VALUES('','$idbill','$idproduct','$quantity','$price')";
				$resultdetail = mysqli_query($conn,$insertdetail);
			}
		}
	}
?>