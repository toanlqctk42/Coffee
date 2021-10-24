<?php
	if(isset($_POST['customer'])){
		require_once('../connection.php');
		$customer = $_POST['customer'];
		$sql = "SELECT * FROM customers WHERE IdCustomer LIKE '%$customer%' OR CustomerName LIKE '%$customer%'";
		$result =mysqli_query($conn,$sql);
		$count =mysqli_num_rows($result);
		if($count>0){
			echo '<ul class="list-group">';
			while ($rows= mysqli_fetch_array($result)) { ?>
				<li class="list-group-item list-group-item-action data-cus-<?php echo $rows['IdCustomer'];?>" onclick="cms_select_customer('<?php echo $rows['IdCustomer'];?>')"><?php echo $rows['CustomerName']; ?></li>
			<?php }
			echo '</ul>';
		}else{
			echo 'Không tìm thấy kết quả';
		}
	}
?>