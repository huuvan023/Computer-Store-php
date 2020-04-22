<?php
session_start();
?>
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
             <img src="Img/logo.svg" alt="BannerCenterLap">
            </a></span>
          <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav text-md-center w-100" id="menu">
              <li class="nav-item mr-5">
                <a class="navbar-brand" id="logo2" href="/PHP/index.php">
                  <img src="Img/logo.svg" alt="BannerCenterLap">
                </a>
              </li>

              <li class="nav-item m-2 mb-2 dropdown-wrap">
                <a class="nav-link dropbtn hover" href="#" ><i class="fas fa-laptop"></i>Laptop</a>
                <div class="dropdown-content">
                  <div class="labeldrop">Hãng sản xuất</div>
                  <a href="/PHP/laptop/catergories.php?view=cate&label=Dell">Dell</a>
                  <a href="/PHP/laptop/catergories.php?view=cate&label=Lenovo">Lenovo</a>
                  <a href="/PHP/laptop/catergories.php?view=cate&label=Asus">Asus</a>
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