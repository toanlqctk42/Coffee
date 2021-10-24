<?php
	if(isset($_POST['menuname'])){
		require_once('../connection.php');
		$menuname = $_POST['menuname'];
		$sql = "SELECT * FROM menus WHERE IdMenu LIKE '$menuname%' OR NameMenu LIKE '$menuname%'";
		$result =mysqli_query($conn,$sql);
		$count =mysqli_num_rows($result);
		if($count>0){
			echo '<ul class="list-group">';
			while ($rows= mysqli_fetch_array($result)) { ?>
				<li class="list-group-item list-group-item-action data-menu-<?php echo $rows['IdMenu'];?>" onclick="cms_select_menu('<?php echo $rows['IdMenu'];?>')">
					<img src="../public/assets/images/<?php echo $rows['Images']; ?>" width="50px">
					<?php echo $rows['NameMenu']; ?>
				</li>
			<?php }
			echo '</ul>';
		}else{
			echo 'Không tìm thấy kết quả';
		}
	}
?>