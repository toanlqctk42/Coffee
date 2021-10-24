<?php
	include('../connection.php');
	if(isset($_POST['id_table'])){
		$idtable= $_POST['id_table'];
		$sql = "SELECT * FROM Bill WHERE IdTable ='$idtable' AND Status=0";
		$result=mysqli_query($conn,$sql);
		$bill = mysqli_fetch_assoc($result);
		if($bill != null){
		$idbill = $bill['IdBill'];
		if(mysqli_num_rows($result)>0){
			$selectoder = "SELECT * FROM billdetail
			INNER JOIN 	menus ON billdetail.IdMenu = menus.IdMenu WHERE IdBill ='$idbill'";
			$resultdetail = mysqli_query($conn,$selectoder);
			while ($rows = mysqli_fetch_array($resultdetail)) { ?>
			<tr data-id="<?php echo $rows['IdMenu'];?>">
				<td><?php echo $rows['IdMenu'];?></td>
				<td><?php echo $rows['NameMenu'];?></td>
				<td>
					<div class="input-group spinner">
						<button class="input-group-prepend btn btn-default"><i class="fa fas fa-minus"></i></button>
						<input type="text" class="form-control quantity-product-oders" name=""
							value="<?php echo $rows['Quantity']; ?>">
						<button class="input-group-prepend btn btn-default"><i class="fa fas fa-plus"></i></button>
					</div>
				</td>
				<td><input type="text" class="form-control price-order" disabled="disabled" name=""
						value="<?php echo $rows['Price'];?>"></td>
				<td class="text-center total-money"><?php echo number_format($rows['Price'],0);?></td>
				<td class="text-center">
					<i class="fa fa-times-circle del-pro-order"></i>
				</td>
			</tr>	
			<?php }
			}
			else{

			}
		}
	} ?>