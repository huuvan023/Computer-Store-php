<?php 
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
?>
      <div class="row pt-3">
       <div style="margin:0 auto;" class=" col-xs-12 col-sm-3 col-md-3 col-lg-3">

        <div class="sticky">
        <div class="tab">
          <button class="tablinks border" onclick="Admin(event, 'Add')">Thêm sản phẩm</button>
          <button class="tablinks border" onclick="Admin(event, 'Update')">Sửa sản phẩm</button>
          <button class="tablinks border" onclick="Admin(event, 'Delete')">Xóa sản phẩm</button>
        </div>
        <div id="Add" class="tabcontent">
         <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageProducts" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID</label>
             <input type="text" name="ID" required >
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Tên sản phẩm</label>
             <textarea name="Name" rows="2" required ></textarea>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Hình ảnh</label>
             <input required style="max-width: 60%;" type="file" id="Image" name="Image">
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Cấu hình</label>
             <textarea  name="System" rows="2" required></textarea>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Giá</label>
             <input type="text" name="Price" required >
           </div>
           <div class="form-group">
             <label for="stt" class="col-sm-4 control-label">Trạng thái</label>
               <select id="stt" name="Status">
                <option value="true">Còn hàng</option>
                <option value="false">Đã bán</option>
               </select>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Nhà sản xuất</label>
             <input type="text" name="Producer" required >
           </div>
           <button type="submit" name="add" class="ml-3 btn btn-primary">Thêm sản phẩm</button>
           <button type="button" name="cancel" onclick="Cancel('Add')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
        </div>
        <div id="Update" class="tabcontent">
          <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageProducts" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID cần sửa</label>
             <input id="editID" value="" type="text" name="ID">
           </div>
           <hr>
           <h5><strong>Sửa thông tin: </strong></h5>
           <div class="form-group">
             <label class="col-sm-4 control-label">Tên sản phẩm</label>
             <textarea name="Name" rows="2"></textarea>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Cấu hình</label>
             <textarea  name="System" rows="2"></textarea>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Giá</label>
             <input type="text" name="Price">
           </div>
           <div class="form-group">
             <label for="stt" class="col-sm-4 control-label">Trạng thái</label>
               <select id="stt" name="Status">
                <option value="true">Còn hàng</option>
                <option value="false">Đã bán</option>
               </select>
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Nhà sản xuất</label>
             <input type="text" name="Producer">
           </div>
           <button type="submit" name="update" class="ml-3 btn btn-primary">Sửa sản phẩm</button>
           <button type="button" name="cancel" onclick="Cancel('Update')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
        </div>
        <div id="Delete" class="tabcontent">
         <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageProducts" 
         method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID cần xóa:</label>
             <input  type="text" id="delID" name="ID">
           <button type="submit" name="delete" class="ml-3 btn btn-primary">Xóa sản phẩm</button>
           <button type="button" name="cancel" onclick="Cancel('Delete')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
         </div>
        </div>
       </div>
      </div>
         <div style="margin:0 auto;" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <div class="card bg-light">
            <div class="card-header">Danh sách sản phẩm</div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-hover">
                  <tr>
                    <th>Số thứ tự</th>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Cấu hình</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Nhà sản xuất</th>
                    <th></th>
                  </tr>
                  <?php 
                  if($result -> num_rows >0){
                    $count = 0;
                    while($row=$result ->fetch_array(MYSQLI_ASSOC)){
                  ?>
                    <tr style="font-size: 10px">
                      <td><?php echo $count;?></td>
                      <td><?php echo $row["id"];?></td>
                      <td><?php echo $row["name"];?></td>
                      <td> 
                      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="100" width="100"';?> />  </td>
                      <td><?php echo $row["system"];?></td>
                      <td><?php echo $row["price"];?></td>
                      <td><?php echo $row["status"];?></td>
                      <td><?php echo $row["producer"];?></td>
                      <td><button type="button"
                      onclick="tableUpdate(event, 'Update',<?php echo$row['id'];?>)"
                      class="btn btn-info btn-sm mt-2">Sửa</button>
                      <button type="button"
                      onclick="tableUpdate(event, 'Delete',<?php echo$row['id'];?>)"
                      class="btn btn-warning   btn-sm mt-2">Xóa</button>
                      </td>
                    </tr>

                  <?php 
                    $count++;
                      }
                    } ?>
              </table>
            </div>
          </div>
         </div>
