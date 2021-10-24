<div class="row customer-act act">
	<div class="col-md-5">
		<h2>Tạo phiếu nhập <i class="fa fa-angle-double-right" aria-hidden="true"></i></h2>
	</div>
	<div class="col-md-7 text-right action">
		<button class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
		<button class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Lưu & In</button>
		<button class="btn" onclick="cms_cancel_import();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Hủy</button>
	</div>
</div>
<div class="row content-inport">
	<div class="col-md-8">
		<div class="form-group">
			<input type="text" onkeyup="cms_search_import()" id="txtsearchimport" name="" placeholder="Nhập mã sản phẩm cần nhập" class="form-control">
		</div>
		<table class="table table-striped table-bordered">
		    <thead class="thead-light">
		      <tr>
		      	<th>Mã nhiếu nhập</th>
		        <th>Kho nhập</th>
		        <th>Tình trạng</th>
		        <th>Ngày nhập</th>
		        <th>Người nhập</th>
		        <th>Tổng tiền</th>
		      </tr>
		    </thead>
		    <tbody>
		      	<td colspan="6" class="text-center">Không có dữ liệu</td>
		    </tbody>
		</table>
		<div class="alert alert-success">
			Gõ mã hoặc tên sản phẩm vào hộp tìm kiếm để thêm hàng vào đơn hàng
		</div>
	</div>
	<div class="col-md-4">
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Nhà cung cấp</strong>
			</div>
			<div class="col-md-8">
				<div class="input-group">
			        <input type="text" class="form-control" placeholder="Tìm NCC">
			        <div class="input-group-prepend">
			          	<button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
			        </div>
      			</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Ngày nhập</strong>
			</div>
			<div class="col-md-8">
			     <input type="date" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Người nhập</strong>
			</div>
			<div class="col-md-8">
			    <select class="form-control">
			    	<option>Admmin</option>
			    </select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Ghi chú</strong>
			</div>
			<div class="col-md-8">
			    <textarea class="form-control" rows="3" placeholder="Ghi chú"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 class="lighter"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin thanh toán</h4>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Hình thức</strong>
			</div>
			<div class="col-md-8 form-inline">
			    <div class="form-check">
          			<input class="form-check-input" type="radio" name="gridRadios"" value="option1" checked>
          			<label class="form-check-label">Tiền mặt</label>
        		</div>
        		<div class="form-check">
          			<input class="form-check-input" type="radio" name="gridRadios"" value="option1" checked>
          			<label class="form-check-label">CK</label>
        		</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Tiền hàng</strong>
			</div>
			<div class="col-md-8">
			    <div class="total-money">0</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Chiết khấu</strong>
			</div>
			<div class="col-md-8">
			    <input class="total-money-afer-discout form-control" value="0">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Tổng cộng</strong>
			</div>
			<div class="col-md-8">
			    <div class="total-money">0</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Thanh toán</strong>
			</div>
			<div class="col-md-8">
			   	<input class="customer-pay form-control" value="0">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4 p-0">
				<strong>Còn nợ</strong>
			</div>
			<div class="col-md-8">
			    <div class="total-money">0</div>
			</div>
		</div>
	</div>
</div>