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
    <title>Laptop</title>
    <link rel="stylesheet" type="text/css" href="../Css/drop_load.css">
    <link rel="stylesheet" type="text/css" href="../Css/menu.css">
    <link rel="stylesheet" type="text/css" href="../Css/footer.css">
    <link rel="stylesheet" type="text/css" href="../Css/laptop.css">
    <link rel="stylesheet" type="text/css" href="../Css/collapsible.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      *{
        box-sizing: border-box;
        -moz-box-sizing: border-box;
      }
    </style>
  </head>

  <body style="  font-family: Verdana;">
        <div class="loader">
         <img src="../Img/loading.gif" alt="Loading..." />
       </div>
    <!--Header-->
    <header class="masthead sticky-top ">
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
              <li class="nav-item mr-5">
                <a class="navbar-brand" id="logo2" href="/PHP/index.php">
                  <img src="../Img/logo.svg" alt="BannerCenterLap">
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
                  <a class="nav-link btn btn-default border" 
                  href="/PHP/Forms/Login-Register.php?view=log-reg&label=login">Đăng nhập</a>
              </li>

            </ul>
          </div>
        </nav>
      </header>
    <ul class="breadcrumb">
        <li style="margin-left: 10px;"><a href="/PHP/index.php">Home</a></li>
        <li><a href="/PHP/laptop.php">Laptop</a></li>
        <li><?php if(isset($_GET["view"]) == "cate"){ echo($_GET["label"]); }?></li>
    </ul>

    <div class="container-fluid">
        <div class="row ml-1">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 bg-light border">
            <h4 class="filterHeader"><i class="fas fa-laptop"></i>Laptop</h4>
            <hr>
            <div class="card" style="border: none;  background-color: white;">
              <div class="card-header" style=" background-color: white;">
                <a class="card-link collapsible" style="font-size:13px;display: block; color:black" data-toggle="collapse" href="#collapseOne">
                  Theo giá
                </a>
              </div>
              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  <input type="text" class="collapse-input ml-2" placeholder="Giá cao nhất" name="maxPrice"/>
                    -
                  <input type="text" class="collapse-input"  placeholder="Giá thấp nhất" name="minPrice"/>
                </div>
              </div>
            </div>
            <div class="card" style="border: none;  background-color: white;">
              <div class="card-header" style=" background-color: white;">
                <a class="card-link collapsible" style="font-size:13px;display: block; color:black" data-toggle="collapse" href="#collapseTwo">
                  Theo thương hiệu
                </a>
              </div>
              <div id="collapseTwo" class="collapse">
                <div class="card-body vertical-menu">
                  <a href="#">Dell</a>
                  <a href="#">Lenovo</a>
                  <a href="#">Asus</a>
                </div>
              </div>
            </div>
            <div class="card" style="border: none;  background-color: white;">
              <div class="card-header " style=" background-color: white;">
                <a class="card-link collapsible" style=" font-size:13px; display: block; color:black" data-toggle="collapse" href="#collapseThree">
                  Theo bộ nhớ Laptop
                </a>
              </div>
              <div id="collapseThree" class="collapse">
                <div class="card-body vertical-menu">
                  <a href="#">4GB</a>
                  <a href="#">8GB</a>
                  <a href="#">16GB</a>
                  <a href="#">32GB</a>
                </div>
              </div>
            </div>
            <div class="card" style="border: none;  background-color: white;">
              <div class="card-header " style=" background-color: white;">
                <a class="card-link collapsible" style=" font-size:13px; display: block; color:black" data-toggle="collapse" href="#collapseFour">
                  Theo độ phân giải màn hình
                </a>
              </div>
              <div id="collapseFour" class="collapse">
                <div class="card-body vertical-menu">
                  <a href="#">1366 x 768</a>
                  <a href="#">1920 x 1080</a>
                  <a href="#">2160 x 1440</a>
                  <a href="#">2560 x 1600</a>
                </div>
              </div>
            </div>
            <div class="filterFooter">
              <button type="submit" class="btn btn-danger">Áp dụng</button>
            </div>
        </div>
      
      <?php
      if(isset($_GET["view"]) == "cate"){
        include( $_GET["label"].".php");
      }
       ?>  
      <hr>
        <div class="guide ">
            <h5>Hướng dẫn mua laptop phù hợp với nhu cầu của bạn</h5>
            <p>Với mỗi người nhu cầu sử dụng laptop là khác nhau nhưng có 4 
              nhóm nhu cầu sử dụng chính sau đây: Laptop để học tập, laptop dùng c
              ho ứng dụng văn phòng, laptop chơi game và latop cho các nghiệp vụ chuyên biệt (Laptop workstation). Hôm nay Phong Vũ sẽ cùng bạn phân tích các tiêu chí cần
              cân nhắc khi chọn mua laptop sao cho tối ưu nhất đối với nhu cầu sử dụng, hiệu năng và giá tiền.</p>
              <div class="row"> 
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <h6>I. Laptop để học tập - văn phòng </h6>
              <p>Tôi đưa 2 nhóm nhu cầu này cùng nhau bởi các ứng dụng để học tập và làm văn phòng thường có yêu 
                cầu cấu hình tương tự nhau. Cũng như nhu cầu di chuyển, 
                thao tác, môi trường sử dụng của 2 nhóm đối tượng này cũng có nhiều điểm tương đồng.</p>
              <b>Cấu hình: dựa trên tính chất môn học, công việc</b>
              <p>Với sinh viên kinh tế hay những bạn làm việc thường xuyên trên web, cần dùng các ứng dụng văn phòng 
                từ Microsoft, rất ít đụng tới đồ họa. Chúng ta có thể chọn các mẫu laptop sở hữu chip Intel Celeron hoặc Pentium thuộc phân khúc 6 đến dưới 10 t
                riệu đồng vì với nhu cầu như trên, hai dòng vi xử lí đã nêu hoàn toàn đáp ứng được điều này.</p>
              <img src="../Img/laptop-van-phong.jpg" style="max-width: 100%" alt="laptopvanphong">
              <p>Nếu bạn thuộc khối kĩ thuật hoặc công việc yêu cầu chúng ta phải liên tục sử dụng các phần mềm đồ họa hoặc phần mềm giả lập, hoặc đơn giản bạn muốn có 
                một chiếc laptop dùng lâu dài từ 4 năm trở lên... Lúc này laptop với vi xử lí Core i với i3 hay i5 nên được chọn mua dù giá của chúng dao động từ 10 đến 
                17 triệu đồng vì chỉ có những vi xử lí này mới có khả năng đáp ứng được công việc của bạn.</p>
              <b>Dung lượng RAM cần tối thiểu là 4GB</b>
              <p>Ngoài các ứng dụng văn phòng thì trình duyệt web (Chrome là trình duyệt web phổ biến nhất hiện nay) là ứng dụng 
              được sử dụng nhiều nhất. Bởi hầu hết các ứng dụng hiện nay như: office, xử lý ảnh, nghe nhạc, xem phim,... đều chủ yếu sử dụng trên trình duyệt web.
              Đặc điểm của trình duyệt Chrome rất ngốn ram nên để có trải nghiệm mượt mà nhất khi làm việc, mình khuyên các bạn nên lựa chọn cho mình những chiếc laptop có RAM tối thiểu là 4GB.
              Các nhà sản xuất cũng hiểu điều này nên hiện tại các mẫu laptop từ 6 triệu đồng đã có dung lượng RAM tối thiểu là 4 GB. Tuy nhiên từ 6 đến 10 triệu thường loại bộ nhớ của RAM sẽ là DDR3L cho hiệu suất thấp hơn dòng DDR4 trên các mẫu laptop từ 10 đến 17 triệu đồng. Nếu bạn muốn máy đa nhiệm 
              tốt, mở được nhiều cửa sổ hay chương trình thì ta nên chọn laptop hỗ trợ RAM DDR4 nhé.</p>
              <b>Ổ cứng HDD và SSD</b>
              <p>Dung lượng ổ cứng HDD tối thiểu nên là 500GB hoặc tốt nhất bạn nên chọn mua cho mình laptop sở hữu SSD để có được tốc độ sử dụng phần mềm một cách tối ưu.
                 Đảm bảo với bạn HDD và SSD là 2 trải nghiệm tốc độ một trời một vực</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <h6>II. Laptop để chơi game </h6>
              <p>Những game sinh viên chơi phổ biến hiện nay như: Liên minh huyền thoại, Fifa,... đều có yêu cầu cấu hình tối thiểu khá thấp nên việc lựa chọn laptop để đáp
                 ứng được những tựa game phổ thông như kể trên là điều không khó.<b>Ví dụ Cấu hình đề nghị của tựa game
                 Liên Minh Huyền Thoại </b> CPU xung nhịp 2.4Ghz hai lõi hoặc 3Ghz, Bộ nhớ trong (RAM): 4GB cho Windows 7, Dung lượng ổ đĩa trống : 12GB, Hỗ trợ DirectX 9.0c 
                 hoặc cao hơn, Card đồ họa : Nvidia GeForce 8800/AMD Radeon HD 5670 hoặc các card màn hình tương đương 
                 (Dung lượng 512 MB), Hệ điều hành  Windows 7 trở lên Với cầu hình như trên thì chỉ cần khoảng 6-7 triệu
                  là bạn hoàn toàn có thể mua được 1 chiếc laptop chơi LOL ở mức medium - chấp nhận được.</p>
              <img src="../Img/laptop-choi-game.jpg" alt="laptopchoigame" style="max-width: 100%;">
              <p>  Tuy nhiên với những tựa game mới ra mắt gần đây như PUBG, GTA5 hay các game offline đình đám khác thì câu chuyện lại hoàn toàn khác. Những yếu tố bạn phải
                 cân nhắc khi lựa chọn laptop chơi game đó là:</p>
              <b>Card màn hình - VGA là ưu tiên số 1</b>
              <p>Bạn có thể dễ dàng tra được qua google thông số cấu hình tối thiểu của tựa game mình muốn chơi. Sau đó cân nhắc hầu bao lựa chọn của mình để mua 1 chiếc laptop phù hợp đáp ứng yêu cầu đó. VGA hay card  màn hình rời luôn phải
                 là ưu tiên hàng đầu để đầu tư. Vì VGA khủng sẽ giúp bạn gánh được các tác vụ xử lý đồ họa cực nặng cho game.</p>
              <b>Màn hình laptop</b>
              <p>Đầu tư nhiều vào VGA mà bỏ quên chọn cho mình màn hình tương xứng thì quả là thiếu sót. Để có được trải nghiệm chơi game tốt nhất, 
                bạn cần phải lựa chọn cho mình màn hình full HD để các đối tượng sắc nét và chi tiết tốt nhất.</p>
              <b>CPU, RAM.</b>
              <p>Sau khi chọn được 2 bộ phận quan trọng nhất thì CPU, RAM  là những linh kiện bạn phải để tâm đến để tránh tình trạn nghẽn 
                cổ chai hay cân nhắc để đầu tư cho việc sử dụng vào mục đích khác ngoài chơi game.</p>
              <b>Bàn phím, tản nhiệt</b>
              <p>Khi chơi game bạn sẽ phải sử dụng bàn phím laptop khá nhiều nên trải nghiệm phím bấm và đèn của phím là 2 thứ bắt buộc phải có cho chiếc laptop chơi game của bạn</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <h6>III. Laptop workstation</h6>
              <p>Các máy workstation hay máy trạm cung cấp hiệu suất cao hơn máy tính cá nhân, đặc biệt là về CPU, đồ họa, 
                bộ nhớ và khả năng xử lý đa nhiệm. Nó được tối ưu hóa cho việc xử lý các loại dữ liệu phức tạp như các bản vẽ 3D trong cơ khí, các mô phỏng 
                trong thiết kế, vẽ và tạo ra các hình ảnh động, các logic toán học, thiết kế đồ họa...</p>
              <img src="../Img/laptop-doanh-nhan.jpg" alt="laptopdoanhnhan" style="max-width:100%;">
              <p>Laptop workstation có gì khác với Laptop thông thường?</p>
              <b>Cấu hình và hiệu năng:</b>
              <p>Các tác vụ xử lý đồ họa phức tạp như ảnh động, hình ảnh 3D... đều được Laptop Workstation xử lý vô
                 cùng nhanh chóng, điều mà ở các laptop thông thường khó làm được. Điều này có được do Laptop Workstation 
                 được trang bị cấu hình thế hệ mới nhất và card đồ họa chuyên dụng hiếm thấy ở các laptop thông thường. 
                 Chính vì vậy, laptop máy trạm không được bày bán phổ biến tại Việt Nam, thường phải Order 
                 trực tiếp tại hãng sản xuất hoặc các nhà phân phối quốc tế.</p>
              <b>Build ngoại hình chắc chắn:</b>
              <p>Laptop workstation là một chiếc laptop dành cho công việc, do đó nó được build ngoại hình vô cùng
                 chuyên nghiệp và sang trọng, phù hợp với tất cả các đối tượng khách hàng khác nhau. Quy trình 
                 kiểm tra theo tiêu chuẩn quân đội khắc nghiệt để cho xuất xưởng được một chiếc Laptop workstation 
                 chắc chắn, bền bỉ trước các tác động của mội trường. Vỏ máy được làm từ vật liệu nhẹ nhưng chịu
                  lực vô cùng tốt. Phần cứng bên trong máy sắp xếp hợp lý sao cho người dùng có thể nâng cấp nhanh
                   gọn trong vài phút.</p>
            </div>
          </div>
        </div>



        </div>
    </div>
  </div>

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

    <script type="text/javascript" src="../Js/Menu.js"></script>
    <script type="text/javascript" src="../Js/collapsible.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>