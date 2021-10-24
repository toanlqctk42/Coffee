<?php
	require_once('../connection.php');
	if(isset($_POST['id_menu'])){
		$id = $_POST['id_menu'];
		$sql = "SELECT * FROM menus WHERE IdMenu= '$id'";
		$result =mysqli_query($conn,$sql);
		$rows= mysqli_fetch_assoc($result); ?>
		<tr data-id="<?php echo $rows['IdMenu'];?>">
			<td><?php echo $rows['IdMenu'];?></td>
			<td><?php echo $rows['NameMenu'];?></td>
			<td><div class="input-group spinner">
					<button class="input-group-prepend btn btn-default"><i class="fa fas fa-minus"></i></button>
					<input type="text" class="form-control quantity-product-oders" name="" value="1">
					<button class="input-group-prepend btn btn-default"><i class="fa fas fa-plus"></i></button>
				</div></td>
			<td><input type="text" class="form-control price-order" disabled="disabled" name="" value="<?php echo $rows['Price'];?>"></td>
			<td class="text-center total-money"><?php echo number_format($rows['Price'],0);?></td>
			<td class="text-center">
				<i class="fa fa-times-circle del-pro-order"></i>
			</td>
		</tr>
	<?php }
?>