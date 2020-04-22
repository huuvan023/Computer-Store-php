<?php
session_start();
include("../Connection/connection.php");
if(!isset($_SESSION["user"]) || !isset($_SESSION["password"])){
  header('Location:/PHP/notfound.php');
}
else{
  $id = $_SESSION["id"];
  $sql = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row = $result -> fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="../Css/drop_load.css">
    <link rel="stylesheet" type="text/css" href="../Css/menu.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="../Css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>

  <body style="background-color: #E0E0E0; font-family: Verdana;">
        <div class="loader">
         <img src="../Img/loading.gif" alt="Loading..." />
       </div>

    <!--Header-->
      <header class="masthead  ">
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded  ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-container" onclick="Menu(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </span>
          </button>
          <span id="logo1">
            <a class="navbar-brand" href="/PHP/index.php">
             <img src="../Img/logo.svg" alt="BannerCenterLap">
            </a></span>
          <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav text-md-center w-100" id="menu">
              <li class="nav-item active mr-5">
                <a class="navbar-brand" id="logo2" href="/PHP/index.php">
                  <img src="../Img/logo.svg" alt="BannerCenterLap">
                </a>
              </li>

              <li class="nav-item m-2 mb-2 dropdown-wrap">
                <a class="nav-link dropbtn hover" href="#" ><i class="fas fa-laptop"></i>Laptop</a>
                <div class="dropdown-content">
                  <div class="labeldrop">Hãng sản xuất</div>
                  <a href="#">Dell</a>
                  <a href="#">Lenovo</a>
                  <a href="#">Asus</a>
                </div>

              </li>

              <li class="nav-item m-2 mb-2 dropdown-wrap">
                  <a class="nav-link dropbtn hover" href="#" ><i class="fas fa-tv"></i>Máy bàn</a>
                  <div class="dropdown-content">
                  <div class="labeldrop">Hãng sản xuất</div>
                  <a href="#">Máy trạm Dell Precision</a>
                  <a href="#">Máy trạm HP Workstation</a>
                </div>
              </li>
              <li class="nav-item m-2 mb-2 dropdown-wrap">
                  <a class="nav-link dropbtn hover" href="#" ><i class="fas fa-tv"></i>Màn hình LCD</a>
                  <div class="dropdown-content">
                  <div class="labeldrop">Hãng sản xuất</div>
                  <a href="#">Dell</a>
                  <a href="#">Apple</a>
                  <a href="#">Asus</a>
                  <a href="#">HP</a>
                </div>
              </li>
              <li class="nav-item m-2 mb-2 dropdown-wrap">
                  <a class="nav-link dropbtn hover" href="#"><i class="fas fa-mouse"></i>Linh kiện</a>
                  <div class="dropdown-content">
                  <div class="labeldrop">Phụ kiện Laptop, PC</div>
                  <a href="#">Ram</a>
                  <a href="#">Ổ cứng</a>
                  <a href="#">Chuột</a>
                  <a href="#">Bàn phím</a>
                  <a href="#">Card màn hình</a>
                </div>
              </li>

              <li class="nav-item m-2 ml-auto " >
                <div class = "searchBox " id="searchResponsive">
                    <input class="Seachinput" type="search" placeholder="Nhập từ khóa..."/>
                    <i class="fa fa-search"></i>
                  </div>
              </li>

              <li class="nav-item m-2">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart" 
                    style="font-size:30px;"></i></a>
              </li>
              <li class="nav-item mt-2 ml-2 mb-2">
                   <?php
                  if(isset($_SESSION["user"]) && isset($_SESSION["password"])){
                    if($_SESSION["type"] == "users"){
                      echo "<a class='nav-link btn btn-default border' 
                      href='/PHP/User/index.php'>Tài khoản</a>";
                      }
                    if($_SESSION["type"] == "admin"){
                      echo "<a class='nav-link btn btn-default border' 
                    href='/PHP/Admin/index.php'>Tài khoản</a>";
                    }
                  }
                  else{
                    echo "<a class='nav-link btn btn-default border' 
                  href='/PHP/Forms/Login-Register.php?view=log-reg&label=login'>Đăng nhập</a>";
                  }
                  ?>
              </li>

            </ul>
          </div>
        </nav>
      </header>
    <ul class="breadcrumb">
        <li style="margin-left: 10px;"><a href="/PHP/index.php">Home</a></li>
        <li>Thông tin tài khoản</li>
    </ul>

<div class="container bg-light">
  <div class="row">
    <h4 id="label">Thông tin tài khoản</h4>
  </div>

  <div class="row d-flex justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-5 ">
      <img src="../Img/laptop-doanh-nhan.jpg" style="max-width:200px;max-height:200px; " alt="Ảnh đại diện">
      <p class="mt-3"><a id="logout" href="/PHP/User/config.php?view=account&&action=logout">Đăng xuất</a><p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
      <form id="userUpdateInformation" method="POST" enctype="multipart/form-data">
        <div class="frm-group">
          <label>Họ và tên: </label>
          <input pattern="^[a-zA-Z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$"
          type="text" value="<?php echo $row["fullname"]; ?>" name="fullName"
          oninvalid="this.setCustomValidity('Sai định dạng tên')"
          oninput="this.setCustomValidity('')" >  
        </div>
        <div class="frm-group">
          <label>Email: </label>
          <input pattern="^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$"
          type="text" value="<?php echo $row["email"]; ?>" name="email" required
          oninvalid="this.setCustomValidity('Vui lòng nhập lại email')"
          oninput="this.setCustomValidity('')" > 
        </div>
        <div class="frm-group">
          <label>Số điện thoại: </label>
          <input type="text" pattern="([0-9]{0,10})\b" 
          value="<?php echo $row["phone"]; ?>" name="phoneNumber"
          oninvalid="this.setCustomValidity('Vui lòng nhập lại số điện thoại')"
          oninput="this.setCustomValidity('')" > 
        </div>
        <div class="frm-group">
          <label>Giới tính</label>
          <input type="radio" style="width: 10px"
          <?php if($row["gender"] == "nam"){ echo "checked"; }else{ echo ""; } ?> 
          id="male" name="gender" value="nam">
          <label for="male">Nam</label><br>
          
          <label></label>
          <input <?php if($row["gender"] == "nữ"){ echo "checked"; }else{ echo ""; } ?> 
          type="radio" style="width: 10px"
          id="female" name="gender" value="nữ">
          <label for="female">Nữ</label><br>
        </div>
        <div class="frm-group">
          <label>Địa chỉ: </label>
          <textarea rows="3" name = "address" ><?php echo $row["address"]; ?></textarea>
        </div>
        <div class="frm-group-changPW custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="toggleChangePW" name="toggleChangePW" value="true">
          <label class="custom-control-label" for="toggleChangePW">Thay đổi mật khẩu</label>
        </div>
       <div style="display: none;" id="changePW"> 
        <div class="frm-group">
          <label>Mật khẩu cũ: </label>
          <input type="password" name="currentPW"  autofocus>
        </div>
        <div class="frm-group">
          <label>Mật khẩu mới: </label>
          <input type="password" name="newPW" autofocus >
        </div>
        <div class="frm-group">
          <label>Nhập lại mật khẩu: </label>
          <input type="password" name="confirmPW" autofocus >
        </div>
      </div>
        <div class="frm-group d-flex justify-content-center ">
          <button type="submit" id="Update" class="mr-2 btn btn-success">Thay đổi thông tin</button>
          <button type="button" class="btn btn-danger">Hủy bỏ</button>
        </div>
      </form>
    </div>
  </div>
</div>





      <hr>
      <footer >
        <div class="footercss row">
        <div class="col-x-4 col-s-4 col-md-4 col-lg-4 text-center pt-2">
          <h4>Về chúng tôi</h4>
          <p>Giới thiệu</p>
          <p>Quy chế hoạt động</p>
        </div>
        <div class="col-x-4 col-s-4 col-md-4 col-lg-4 text-center pt-2">
          <h4>Hỗ trợ khách hàng</h4>
          <p>Hotline: 0372746758</p>
          <p>Các câu hỏi thường gặp</p>
          <p>Gửi yêu cầu hỗ trợ</p>
          <p>Hướng dẫn đặt hàng</p>
          <p>Chính sách đổi trả</p> 
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center pt-2">
         <h4>Kết nối với chúng tôi</h4>
         <span style="margin:8px;font-size: 30px;"><i class="fab fa-facebook-square"></i></span> 
         <span style="margin:8px;font-size: 30px;"><i class="fab fa-youtube"></i></span>
         <span style="margin:8px;font-size: 30px;"><i class="fas fa-envelope-square"></i></span>
        </div>
      </div>
      <div class="row">
        <p> &copy;2020 - Bản quyền thuộc Hữu Văn </p>
      </div>
      </footer>
    <script>
    $(document).ready(function(){


      $("#toggleChangePW").change(function(){
        var value = $("#toggleChangePW").prop('checked');
        if(value == true){
          $("#changePW").css("display","block");
        }
        else{
          $("#changePW").css("display","none");
        }
      });


//Update thông tin khách hàng
$('#userUpdateInformation').on('submit', function(event){
        event.preventDefault();
        $.ajax({
         url:"/PHP/User/config.php?view=account&&action=updateAccount",
         method:"POST",
         //hàm serialize lấy ra các thành phần trong form và mã hóa thành giá chuỗi
         data:$(this).serialize(),
         dataType:"json",
         beforeSend:function()
         {
          $('#Update').attr('disabled','disabled');
         },
         success:function(data)
         {
          $('#Update').attr('disabled', false);
          if(data.success)
          {
           //sử dụng sweetAlert
           swal({
              title: "Thành công!",
              text: data.success,
              confirmButtonColor: '#04B404',
              imageUrl:'../Img/success.gif'
              //closeOnCancel: false
            });
          }
          if(data.fail)
          {
            swal({
              title: "Thất bại!",
              text: data.fail,
              confirmButtonColor: '#DF013A',
              imageUrl: '../Img/fail.gif'
            });
          }

         }
        })
       });
    }); 

    </script>
    <script type="text/javascript" src="../Js/Menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>