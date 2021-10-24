<div class="row customer-act act">
    <div class="col-md-5">
        <h2>Khách hàng</h2>
    </div>
    <div class="col-md-7 text-right action">
        <button class="btn btn-success" data-toggle="modal" data-target="#AddCustomerModal"><i class="fa fa-plus" aria-hidden="true"></i> Tạo KH</button>
    </div>
</div>
<div class="row supplier-act act" style="display:none;">
    <div class="col-md-5">
        <h2>Nhà cung cấp</h2>
    </div>
    <div class="col-md-7 text-right action">
      <button class="btn btn-success" data-toggle="modal" data-target="#AddSupplierModal"><i class="fa fa-plus" aria-hidden="true"></i> Tạo NCC</button>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" onclick="tab_click_act('customer')">
                <a class="nav-link active" data-toggle="tab" href="#cus" role="tab" aria-selected="true"><i class="fa fa-users" aria-hidden="true"></i> Khách hàng</a>
            </li>
            <li class="nav-item" onclick="tab_click_act('supplier')">
                <a class="nav-link" data-toggle="tab" href="#sup" role="tab" aria-selected="false"><i class="fa fa-truck" aria-hidden="true"></i> Nhà cung cấp</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="cus" role="tabpanel">
                <div class="row filter-search">
                    <div class="col-md-5 form-group">
                        <input type="text" name="txtcustomer" class="form-control" placeholder="Nhập tên, mã khách hàng">
                    </div>
                    <div class="col-md-3 form-group">
                        <select class="form-control">
                            <option>Tất cả</option>
                            <option>Còn nợ</option>
                       </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <thead class="table-primary">
                                <tr>
                                  <th>Mã KH</th>
                                  <th>Tên Khách Hàng</th>
                                  <th>Điện thoại</th>
                                  <th>Email</th>
                                  <th>Địa chỉ</th>
                                  <th>Tổng tiền hàng</th>
                                  <th>Nợ</th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include('connection.php');
                                $sql = "SELECT * FROM customers";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<tr>
                                        <td>'.$row['IdCustomer'].'</td>
                                        <td>'.$row['CustomerName'].'</td>
                                        <td>'.$row['PhoneNumber'].'</td>
                                        <td>'.$row['Email'].'</td>
                                        <td>'.$row['Address'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa fa-trash" aria-hidden="true" onlick="cms_del_cus('.$row['IdCustomer'].')"></i> <i class="fa fa-pencil-square-o" aria-hidden="true" onlick="cms_edit_cus('.$row['IdCustomer'].')"></i></td>
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
            </div>
            <div class="tab-pane fade" id="sup" role="tabpanel">
                <div class="row filter-search">
                    <div class="col-md-5 form-group">
                        <input type="text" name="txtcustomer" class="form-control" placeholder="Nhập tên, mã, SĐT nhà cung cấp">
                    </div>
                    <div class="col-md-3 form-group">
                        <select class="form-control">
                            <option>Tất cả</option>
                            <option>Đã từng nhập</option>
                            <option>Còn nợ NCC</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>Mã NCC</th>
                                    <th>Tên Tên NCC</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổng tiền hàng</th>
                                    <th>Nợ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include('connection.php');
                                $supplier = "SELECT * FROM suppliers";
                                $resultsup = mysqli_query($conn,$supplier);
                                if(mysqli_num_rows($result)>0){
                                    while ($sup = mysqli_fetch_array($resultsup)) {
                                        echo '<tr>
                                        <td>'.$sup['Idsupplier'].'</td>
                                        <td>'.$sup['Namesupplier'].'</td>
                                        <td>'.$sup['Phone'].'</td>
                                        <td>'.$sup['Email'].'</td>
                                        <td>'.$sup['Address'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td><i class="fa fa-trash" aria-hidden="true" onlick="cms_del_sup('.$sup['Idsupplier'].')"></i> <i class="fa fa-pencil-square-o" aria-hidden="true" onlick="cms_edit_sup('.$sup['Idsupplier'].')"></i></td>
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
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="AddCustomerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm khách hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Mã khách hàng</b>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="txtcodecus" placeholder="Mã mặc định" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Tên khách hàng</b>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="txtnamecus" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Số điện thoại</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtphonecus" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Email</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtemailcus" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Địa chỉ</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtaddrescus" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Ghi chú</b>
                    </div>
                    <div class="col-md-8">
                        <textarea name="txtnotecus" class="form-control" placeholder="Chi chú" rows="3"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <div class="jumbotron">
                            <h3>Upload hình ảnh nhà cung cấp</h3>
                            <p>(Để tải và hiện thị nhanh, mỗi ảnh lên có dung lượng tối đa 5MB.)</p>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">  
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="cms_add_customer()"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
                <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Hủy</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="AddSupplierModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm nhà cung cấp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Tên nhà cung cấp</b>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="txtnamesup" placeholder="Nhập tên nhà cung cấp" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Số điện thoại</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtphonesup" placeholder="Số điện thoại" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Email</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtemailsup" placeholder="Email ( ví dụ : huynhhuynh02@gmail.com)" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Địa chỉ</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtaddresssup" placeholder="Địa chỉ cơ sở nhà cung cấp" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Ghi chú</b>
                    </div>
                    <div class="col-md-8">
                        <textarea name="txtnotesup" class="form-control" placeholder="Chi chú" rows="3"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <b>Nợ</b>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="txtdebtsup" placeholder="Nợ nhà cung cấp" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <div class="jumbotron">
                            <h3>Upload hình ảnh nhà cung cấp</h3>
                            <p>(Để tải và hiện thị nhanh, mỗi ảnh lên có dung lượng tối đa 5MB.)</p>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">	
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu</button>
                <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Hủy</button>
            </div>
        </div>
    </div>
</div>