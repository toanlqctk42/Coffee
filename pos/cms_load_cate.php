<ul>
<?php
	include('../connection.php');
	if(isset($_POST['id_cate'])){
		$idcate= $_POST['id_cate'];
		if($idcate==0){
			$sql = "SELECT * FROM menus";
			$result=mysqli_query($conn,$sql);
			while ($rowmenu= mysqli_fetch_array($result)) { ?>
				<li>
					<a href="#" onclick="cms_select_menu('<?php echo $rowmenu['IdMenu'];?>')" title="<?php echo $rowmenu['NameMenu'];?>">
						<div class="img-product">
							<img src="../public/assets/images/<?php echo $rowmenu['Images']; ?>">
						</div>
						<div class="product-info">
							<span class="product-name"><?php echo $rowmenu['NameMenu'];?></span><br>
							<strong><?php echo number_format($rowmenu['Price'],3);?></strong>
						</div>
					</a>
				</li>
		<?php }
			}else {
			$sql = "SELECT * FROM menus WHERE Idcate ='$idcate'";
			$result=mysqli_query($conn,$sql);
			while ($rowmenu= mysqli_fetch_array($result)) { ?>
				<li>
					<a href="#" onclick="cms_select_menu('<?php echo $rowmenu['IdMenu'];?>')" title="<?php echo $rowmenu['NameMenu'];?>">
						<div class="img-product">
							<img src="../public/assets/images/<?php echo $rowmenu['Images']; ?>">
						</div>
						<div class="product-info">
							<span class="product-name"><?php echo $rowmenu['NameMenu'];?></span><br>
							<strong><?php echo number_format($rowmenu['Price'],3);?></strong>
						</div>
					</a>
				</li>
		<?php }
		}
	}
?>
</ul>