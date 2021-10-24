<div class="row">
	<div class="col-md-12">
		<h3 class="dashboard-title">BÁO CÁO KẾT QUẢ BÁN HÀNG HÔM NAY</h3>
	</div>
	<div class="col-md-4">
		<div class="resport-box resport-blue">
			<div class="resport-icon">
				<i class="fa fa-usd" aria-hidden="true"></i>
			</div>
			<div class="resport-data">
				<?php
					include('connection.php');
					$today = date("Y-m-d");
					$sql = "SELECT COUNT(*) AS totalcolum, SUM(Totalprice) AS totalprice FROM bill WHERE DATE(create_at)='$today' AND Status=1";
					$result= mysqli_query($conn,$sql);
					$row =mysqli_fetch_assoc($result);
				?>
				<p><?php echo $row['totalcolum'];?> Hóa đơn đã thanh toán</p>
				<h4><?php echo number_format($row['totalprice']);?> đ</h4>
				<span>Hôm qua 1,700,000</span>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="resport-box resport-green">
			<div class="resport-icon">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<div class="resport-data">
				<p>1 Hóa đơn đang phục vụ</p>
				<h4>1,500,000 </h4>
				<span>Hôm qua 1,700,000</span>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="resport-box resport-red">
			<div class="resport-icon">
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<div class="resport-data">
				<p>Khách hàng</p>
				<h4>0</h4>
				<span>Hôm qua 0</span>
			</div>
		</div>
	</div>
</div>
</div>
<div class="row">
	<canvas class="col-md-10" id="myChart"></canvas>
</div>