<div class="row act">
	<div class="col-md-5">
		<h2>Phòng/Bàn</h2>
	</div>
	<div class="col-md-7 text-right action">
		<button class="btn btn-success" data-toggle="modal" data-target="#ModalAddTable"><i class="fa fa-plus" aria-hidden="true"></i> Thêm phòng/bàn</button>
		<button class="btn btn-success" data-toggle="modal" data-target="#ModalAddGroup"><i class="fa fa-list" aria-hidden="true"></i> Thêm nhóm</button>
		<button class="btn btn-success">
			<i class="fa fa-sign-in" aria-hidden="true"></i> Nhập file
		</button>
		<button class="btn btn-success">
			<i class="fa fa-sign-out" aria-hidden="true"></i> Xuất file
		</button>
	</div>
</div>
<div class="row filter-search">
	<div class="col-md-5 form-group">
		<input type="text" name="txtproductname" placeholder="Nhập mã hoặc tên bàn" class="form-control">
	</div>
	<div class="col-md-2 form-group p-0">
		<select class="form-control">
			<option>Tầng trệt</option>
			<option>Sân vường</option>
		</select>
	</div>
	<div class="col-md-2 form-group">
		<select class="form-control">
			<option>Tất cả</option>
			<option>Hoạt động</option>
			<option>Ngừng hoạt động</option>
		</select>
	</div>
	<div class="col-md-3 form-group">
		<button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm</button>
	</div>
</div>
<div class="row content-table">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
		    <thead class="table-primary">
			    <tr>
			    	<th>Tên phòng/bàn</th>
			    	<th>Ghi chú</th>
			      	<th>Nhóm</th>
			      	<th>Số ghế</th>
			        <th>Trạng thái</th>
			    </tr>
		    </thead>
		    <tbody id="load_pagination_table">
		      	<?php
		      		include('connection.php');
		      		$sql = "SELECT * FROM tables INNER JOIN areas ON tables.IdArea = areas.IdArea LIMIT 0,10";
		      		$result = mysqli_query($conn,$sql);
		      		if(mysqli_num_rows($result)>0){
		      			while ($row = mysqli_fetch_array($result)) { ?>
		      				<tr data-toggle="collapse" data-target="#collapse-<?php echo $row['IdTable'];?>" aria-expanded="false" aria-controls="collapse-DH001">
			      				<td><?php echo $row['TableName'];?></td>
			      				<td></td>
			      				<td><?php echo $row['BranchName'];?></td>
			      				<td></td>
			      				<td>Đang hoạt động</td>
		      				</tr>
		      				<tr class="collapse tr-detail table-detail" id="collapse-<?php echo $row['IdTable'];?>">
		      					<td colspan="5">
		      						<ul class="nav nav-tabs" id="myTab" role="tablist">
									  	<li class="nav-item">
									    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
									  	</li>
									</ul>
									<div class="tab-content" id="myTabContent">
									  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									  		<div class="row form-group">
									  			<div class="col-md-4">
									  				Tên phòng/Bàn
									  			</div>
									  			<div class="col-md-8">
									  				<?php echo $row['TableName'];?>
									  			</div>
	                        				</div>
	                        				<div class="row form-group">
									  			<div class="col-md-4">
									  				Shố ghế
									  			</div>
									  			<div class="col-md-8">
									  			</div>
	                        				</div>
	                        				<div class="row form-group">
									  			<div class="col-md-4">
									  				Ghi chú
									  			</div>
									  			<div class="col-md-8">
									  			</div>
	                        				</div>
	                        				<div class="row form-group">
									  			<div class="col-md-4">
									  				Nhóm
									  			</div>
									  			<div class="col-md-8">
									  				<?php echo $row['BranchName'];?>
									  			</div>
	                        				</div>
	                        				<div class="row">
	                        					<div class="col-md-12 text-right">
	                        						<button class="btn btn-success" data-toggle="modal" data-target="#ModelEditTable-<?php echo $row['IdTable'];?>"><i class="fa fa-check-square" aria-hidden="true"></i>Cập nhật</button>
	                        						<button class="btn btn-danger"><i class="fa fa-lock" aria-hidden="true"></i>Ngừng hoạt động</button>
	                        						<button class="btn btn-danger" data-toggle="modal" data-target="#ModelDelTable-<?php echo $row['IdTable'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Xóa</button>
	                        					</div>
	                        				</div>
										</div>
									</div>
									<div class="modal fade" id="ModelDelTable-<?php echo $row['IdTable'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered" role="document">
									    	<div class="modal-content">
									      		<div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Đồng ý xóa bàn này</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											    </div>
											    <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <button type="button" onclick="cms_del_table(<?php echo $row['IdTable'];?>)" class="btn btn-primary">Đồng Ý</button>
											    </div>
									    	</div>
									  	</div>
									</div>
									<div class="modal fade" id="ModelEditTable-<?php echo $row['IdTable'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered" role="document">
									    	<div class="modal-content">
									      		<div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin bàn</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											    </div>
											    <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <button type="button" onclick="cms_update_table(<?php echo $row['IdTable'];?>)" class="btn btn-primary">Lưu</button>
											    </div>
									    	</div>
									  	</div>
									</div>
		      					</td>
		      				</tr>
		      		<?php }
		      		}else{
		      			echo '<td colspan="6" class="text-center">Chưa có bàn nào</td>';
		      		}
		      	?>
		    </tbody>
		</table>
		<ul class="pagination">
			<?php 
				$limit = 10;
	      		$querynum =mysqli_query($conn,"SELECT COUNT(*) as postNum FROM tables");
	      		$resultnum =mysqli_fetch_assoc($querynum);
	      		$rowcount = $resultnum['postNum'];
	      		$totalpage = ceil($rowcount/$limit);
	      		for ($i=1; $i <=$totalpage ; $i++) { ?>
	      			<li class="page-item"><a class="page-link" onclick="cms_pagination(<?php echo $i; ?>)" href="#"><?php echo $i; ?></a></li>
	      		<?php }
			?>
	 	 </ul>
	</div>
</div>
<!-- Modal add group -->
<div class="modal fade" id="ModalAddGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLongTitle">Thêm nhóm/phòng bàn</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">
	      		<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Tên nhóm</label>
	        		</div>
	        		<div class="col-md-8">
	        			<input type="text" name="namgrouptable" placeholder="Nhập tên nhóm" class="form-control">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Ghi chú</label>
	        		</div>
	        		<div class="col-md-8">
	        			<textarea class="form-control" rows="3"></textarea>
	        		</div>
	        	</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" onclick="cms_add_grouptable()" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Bỏ qua</button>
	      	</div>
	    </div>
  	</div>
</div>
<!-- Modal add table -->
<div class="modal fade" id="ModalAddTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLongTitle">Thêm Bàn</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">
	        	<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Tên phòng/Bàn <span style="color:red;">(*)</span></label>
	        		</div>
	        		<div class="col-md-8">
	        			<input type="text" name="tablename" placeholder="Nhập tên phòng/bàn" class="form-control">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Nhóm</label>
	        		</div>
	        		<div class="col-md-8">
	        			<select class="form-control" name="areas-id">
	        				<option value="0">Chọn phòng bàn</option>
	        			<?php 
			        		$selectarea = "SELECT * FROM areas";
				      		$resultarea = mysqli_query($conn,$selectarea);
				      		if(mysqli_num_rows($resultarea)>0){
				      			while ($rowarea = mysqli_fetch_array($resultarea)) {?>
				      				<option value="<?php echo $rowarea['IdArea']; ?>"><?php echo $rowarea['BranchName'];?></option>
						<?php }
							}
		      			?>
		      			</select>
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Số ghế</label>
	        		</div>
	        		<div class="col-md-8">
	        			<input type="" name="" placeholder="Số ghế" class="form-control">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-4">
	        			<label>Ghi chú</label>
	        		</div>
	        		<div class="col-md-8">
	        			<textarea class="form-control" rows="3"></textarea>
	        		</div>
	        	</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" onclick="cms_add_table()" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Bỏ qua</button>
	      	</div>
	    </div>
  	</div>
</div>