<?php 
	require_once('../connection.php');
?>
<div class="row list-filter">
	<div class="col-md list-filter-content">
		<?php
				$area = "SELECT * FROM areas";
				$resultarea = mysqli_query($conn,$area);
				while ($rowarea = mysqli_fetch_array($resultarea)) { ?>
					<button class="btn btn-primary"><?php echo $rowarea['BranchName']; ?></button>

			<?php }
			?>
	</div>
</div>
<div class="row table-list">
	<div class="col-md table-list-content">
		<ul>
			<?php
				$table = "SELECT * FROM tables";
				$resulttable = mysqli_query($conn,$table);
				while ($rowtable = mysqli_fetch_array($resulttable)) { ?>
					<li <?php if($rowtable['Status']==1){echo 'class="tb-active"';}?> id="<?php echo $rowtable['IdTable']; ?>" onclick="cms_load_pos(<?php echo $rowtable['IdTable'];?>)"><?php echo $rowtable['TableName']; ?></li>
			<?php }
			?>
		</ul>
	</div>
</div>