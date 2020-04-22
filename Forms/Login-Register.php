<?php
include("../Connection/connection.php");
$query = "SELECT id, name, password FROM users";
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
    <link rel="stylesheet" type="text/css" href="Css/Login-Register.css">
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
                  <a class="nav-link btn btn-default border" href="/PHP/Forms/Login-Register.php?view=log-reg&label=login">Đăng nhập</a>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <div class="mt-2">
      <?php
      if(isset($_GET["view"]) == "log-reg"){
        include($_GET["label"].".php");
      }
      else{
        die();
      }
      ?> </div>
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

      $('[data-toggle="tooltip"]').tooltip();
//Xử lí form đăng kí
      $('#register').on('submit', function(event){
        event.preventDefault();
        $.ajax({
         url:"<?php echo htmlspecialchars("/PHP/Forms/config.php?view=register");?>",
         method:"POST",
         //hàm serialize lấy ra các thành phần trong form và mã hóa thành giá chuỗi
         data:$(this).serialize(),
         dataType:"json",
         beforeSend:function()
         {
          $('#registerBtn').attr('disabled','disabled');
         },
         success:function(data)
         {
          $('#registerBtn').attr('disabled', false);
          if(data.success)
          {
           grecaptcha.reset();
           //sử dụng sweetAlert
           swal({
              title: "Đăng kí thành công!",
              text: data.success,
              confirmButtonColor: '#04B404',
              confirmButtonText: 'Đăng nhập',
              closeOnConfirm: false,
              imageUrl:'../Img/success.gif'
              //closeOnCancel: false
            },
            function(){
              window.location.href = "/PHP/Forms/Login-Register.php?view=log-reg&label=login";  
            });
          }
          if(data.fail)
          {
            swal({
              title: "Đăng kí thất bại!",
              text: data.fail,
              confirmButtonColor: '#DF013A',
              imageUrl: '../Img/fail.gif'
            });
          }
         }
        })
       });
//Xử lí form đăng nhập:
        $('#login').on('submit', function(event){
        event.preventDefault();
        $.ajax({
         url:"<?php echo htmlspecialchars("/PHP/Forms/config.php?view=login");?>",
         method:"POST",
         //hàm serialize lấy ra các thành phần trong form và mã hóa thành giá chuỗi
         data:$(this).serialize(),
         dataType:"json",
         beforeSend:function()
         {
          $('#loginBtn').attr('disabled','disabled');
         },
         success:function(data)
         {
          $('#loginBtn').attr('disabled', false);
          if(data.success)
          {
           //sử dụng sweetAlert
           swal({
              title: "Đăng nhập thành công!",
              text: "Chúc mừng. Bạn đã đăng nhập tài khoản thành công!",
              confirmButtonColor: '#04B404',
              confirmButtonText: 'Trang chủ',
              closeOnConfirm: false,
              imageUrl:'../Img/success.gif'
              //closeOnCancel: false
            },
            function(){
              window.location.href = "/PHP/index.php";  
            });
          }
          if(data.fail)
          {
            swal({
              title: "Đăng nhập thất bại!",
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
    <script type="text/javascript" src="Js/login-register.js"></script>
    <script type="text/javascript" src="../Js/Menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>