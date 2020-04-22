<?php 
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>
      <div class="row pt-3  ">
       <div style="margin:0 auto;" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
         
        <div class="tab">
          <button class="tablinks border" onclick="Admin(event, 'AddUser')">Thêm tài khoản</button>
          <button class="tablinks border" onclick="Admin(event, 'UpdateUser')">Sửa tài khoản</button>
          <button class="tablinks border" onclick="Admin(event, 'DeleteUser')">Xóa tài khoản</button>
        </div>






        <div id="AddUser" class="tabcontent">
         <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageUsers" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID</label>
             <input type="text" name="ID">
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Tên đăng nhập</label>
             <input name="Name" type="text">
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Mật khẩu</label>
             <input type="text" name="Password">
           </div>
           <div class="form-group">
             <label for="type" class="col-sm-4 control-label">Phân quyền</label>
               <select id="type" name="Type">
                <option value="admin">Admin</option>
                <option value="user">User</option>
               </select>
           </div>
           <button type="submit" name="addUsers" class="ml-3 btn btn-primary">Thêm tài khoản</button>
           <button type="button" name="cancel" onclick="CancelUser('AddUser')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
        </div>










        <div id="UpdateUser" class="tabcontent">
          <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageUsers" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID tài khoản cần sửa</label>
             <input type="text" id= "editUserID"name="ID">
           </div>
           <hr>
           <h5><strong>Sửa thông tin tài khoản: </strong></h5>
           <div class="form-group">
             <label class="col-sm-4 control-label">Tên tài khoản</label>
             <input type="text" name="Name">
           </div>
           <div class="form-group">
             <label class="col-sm-4 control-label">Cập nhật mật khẩu: </label>
             <input type="text" name="Password">
           </div>
           <div class="form-group">
             <label for="stt" class="col-sm-4 control-label">Phân quyền</label>
               <select id="stt" name="Type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
               </select>
           </div>

           <button type="submit" name="updateUsers" class="ml-3 btn btn-primary">Sửa tài khoản</button>
           <button type="button" name="cancel" onclick="CancelUser('UpdateUser')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
        </div>

        <div id="DeleteUser" class="tabcontent">
         <form class="form-horizontal" action="/PHP/Admin/config.php?view=admin&&label=manageUsers" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label class="col-sm-4 control-label">ID tài khoản cần xóa:</label>
             <input type="text"  id="delUserID" name="ID">
           <button type="submit" name="deleteUsers" class="ml-3 btn btn-primary">Xóa tài khoản</button>
           <button type="button" name="cancel" onclick="CancelUser('DeleteUser')" class="ml-3 btn btn-danger">Hủy bỏ</button>
         </form>
         </div>
        </div>
       </div>

         <div style="margin:0 auto;" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <div class="card bg-light">
            <div class="card-header">Danh sách tài khoản</div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-hover">
                  <tr>
                    <th>Số thứ tự</th>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Phân quyền</th>
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
                      <td><?php echo $row["fullname"];?></td>
                      <td><?php echo $row["name"];?></td>
                      <td><?php echo $row["password"];?></td>
                      <td><?php echo $row["email"];?></td>
                      <td><?php echo $row["gender"];?></td>
                      <td><?php echo $row["phone"];?></td>
                      <td><?php echo $row["address"];?></td>
                      <td><?php echo $row["type"];?></td>
                      <td><button type="button"
                      onclick="tableUpdate(event, 'UpdateUser',<?php echo$row['id'];?>)"
                      class="btn btn-info btn-sm mt-2">Sửa</button>
                      <button type="button"
                      onclick="tableUpdate(event, 'DeleteUser',<?php echo$row['id'];?>)"
                      class="btn btn-warning btn-sm mt-2">Xóa</button>
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
