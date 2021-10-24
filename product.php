<div class="row">
	<div class="col-md-5">
		<h2>Danh sách thực đơn</h2>
	</div>
	<div class="col-md-7 text-right action">
		<button class="btn btn-success" onclick="cms_addprodcut()"><i class="fa fa-plus" aria-hidden="true"></i> Thêm món ăn</button>
		<button class="btn btn-success" data-toggle="modal" data-target="#AddCategoryModal"><i class="fa fa-th-list" aria-hidden="true"></i> Thêm danh mục</button>
	</div>
</div>
<div class="row filter-search">
	<div class="col-md-5 form-group">
		<input type="text" name="txtproductname" placeholder="Nhập mã hoặc tên sản phẩm" class="form-control">
	</div>
	<div class="col-md-3 form-group">
		<select class="form-control">
			<option>Đang kinh doanh</option>
			<option>Ngừng kinh doanh</option>
		</select>
	</div>
	<div class="col-md-2 form-group">
		<select class="form-control">
			<option>Đồ ăn</option>
			<option>Thức uống</option>
		</select>
	</div>
	<div class="col-md-2 form-group">
		<button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm</button>
	</div>
</div>
<div class="row content-product">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
		    <thead class="table-primary">
			    <tr>
			    	<th></th>
			      	<th>Mã</th>
			        <th>Tên món ăn</th>
			        <th>Gía bán</th>
			        <th>Hình ảnh</th>
			        <th>ĐVT</th>
			        <th>Danh mục</th>
			        <th></th>
			    </tr>
		    </thead>
		    <tbody>
		      	<?php
		      		include('connection.php');
		      		$sql = "SELECT * FROM menus";
		      		$result = mysqli_query($conn,$sql);
		      		if(mysqli_num_rows($result)>0){
		      			while ($row = mysqli_fetch_array($result)) {
		      				echo '<tr>
		      				<td></td>
		      				<td>'.$row['IdMenu'].'</td>
		      				<td>'.$row['NameMenu'].'</td>
		      				<td>'.number_format($row['Price'],0).' đ</td>
		      				<td><img width="50px" src="public/assets/images/'.$row['Images'].'"></td>
		      				<td>'.$row['Unit'].'</td>
		      				<td></td>
		      				<td><i class="fa fa-trash" aria-hidden="true"></i></td>
		      				</tr>';
		      			}
		      		}else{
		      			echo '<td colspan="6" class="text-center">Chưa có thực đơn nào</td>';
		      		}
		      	?>
		    </tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm danh mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#listcategory" role="tab" aria-selected="true"><i class="fa fa-list" aria-hidden="true"></i> Tất cả danh mục</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#addcategory" role="tab" aria-selected="false"><i class="fa fa-plus" aria-hidden="true"></i> Thêm danh mục</a>
			  </li>
			</ul>
			<div class="tab-content">
			  	<div class="tab-pane fade show active" id="listcategory" role="tabpanel">
			  		<table class="table table-bordered">
			  			<thead>
			  				
			  			</thead>
			  			<tbody>
				  		<?php
				      		include('connection.php');
				      		$sql = "SELECT * FROM groupmenu";
				      		$result = mysqli_query($conn,$sql);
				      		if(mysqli_num_rows($result)>0){
				      			while ($row = mysqli_fetch_array($result)) {
				      				echo '<tr>
				      				<td>'.$row['groupid'].'</td>
				      				<td>'.$row['namegroup'].'</td>
				      				<td><i class="fa fa-pencil" aria-hidden="true"></i> <i class="fa fa-trash" aria-hidden="true"></i></td></tr>
				      				';
				      			}
				      		}else{
				      			echo '<td colspan="6" class="text-center">Chưa có thực đơn nào</td>';
				      		}
			      		?>
			      			</tbody>
			  		</table>
			  	</div>
			  	<div class="tab-pane fade" id="addcategory" role="tabpanel">
			  		<div class="row p-1">
			  			<div class="col-md-4">
			  				<label>Tên danh mục</label>
			  			</div>
			  			<div class="col-md-8">
			  				<div class="form-group">
			  					<input type="text" name="txtcategory" class="form-control" placeholder="Nhập tên danh mục">
			  				</div>
			  			</div>
			  			<div class="col-md-12 text-right">
			  				<div class="form-group">
			  					<button class="btn btn-primary" onclick="cms_addcateproduct()"><i class="fa fa-check" aria-hidden="true"></i> Lưu</button>
			  					<button class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu & Tiếp tục</button>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Hủy</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AddMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm món ăn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Hủy</button>
      </div>
    </div>
  </div>
</div>