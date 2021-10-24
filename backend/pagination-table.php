<?php
	include('../connection.php');
	if(isset($_POST['current_page'])){
		$current_page = $_POST['current_page'];
		$limit =10;
		$start =($current_page-1)*$limit;
		$sql = "SELECT * FROM tables INNER JOIN areas ON tables.IdArea = areas.IdArea LIMIT $start,$limit";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_array($result)) {
				echo '<tr>
				<td>'.$row['TableName'].'</td>
				<td></td>
				<td>'.$row['BranchName'].'</td>
				<td></td>
				<td>Đang hoạt động</td>';
			}
		}else{
			echo '';
		}
	}
?>