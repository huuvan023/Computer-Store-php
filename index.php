<?php
 include("Connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="Css/index.css">
    <link rel="stylesheet" type="text/css" href="Css/drop_load.css">
    <link rel="stylesheet" type="text/css" href="Css/menu.css">
    <link rel="stylesheet" type="text/css" href="Css/slick.css">
    <link rel="stylesheet" type="text/css" href="Css/footer.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body style="background-color: #E0E0E0; font-family: Verdana;">
    <!--Loading-->
      <div class="loader">
         <img src="loading.gif" alt="Loading..." />
      </div>
    <!--Header-->
      <header class="masthead sticky-top ">
        <?php
        include('Modules/Header.php');
        ?>
      </header>

    <!--Carousel-->
<div class="container-fluid ">
      
      <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="indicators active"></li>
        <li data-target="#demo" data-slide-to="1" class="indicators"></li>
        <li data-target="#demo" data-slide-to="2" class="indicators"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Img/banner_home.png" style="max-width: 100%" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img src="Img/lenovo1.jpg" style="max-width: 100%" alt="Chicago">
        </div>
        <div class="carousel-item">
          <img src="Img/tragop1.jpg" style="max-width: 100%" alt="New York">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!--Ban nhieu nhat -->
    <div class="mt-3 card bg-light">
      <div class="card-header">
        <h4  style="color: red; font-weight: 700;"><span style="font-size: 40px;"><i class="fas fa-fire-alt"></i></span>
        Sản phẩm được xem nhiều nhất</h4>
        <p style="margin: 0;">Cập nhật liên tục những sản phẩm được xem nhiều trên Centerlap</p>
      </div>
      <section id="slick">
        <div class="row">
            <div class=" col-lg-12">
              <div class="d-flex flex-nowrap slider-content">
                <div class="slider-items d-flex flex-nowrap">
                      <div class="card card-hover">
                         <a style="text-decoration: none" href="#">
                           <img style="width:200px;height:200px;"
                            src="Img/hp-zbook-17-g6-core-i7-9850h-up-to-4-60ghz-ram-32gb-ssd-512gb-m-2-pcle-rtx-3000-6gb-17-3-ips-fhd-windows-10-pro_36540_1.jpg"/>
                         <hr>
                         <div class="card-body">
                            <h6 class="card-title">EliteBook 820 G3 2016 Core i5 6200U 2.3Ghz, Ram 8GB, SSD 256GB, 12.5" HD Full Box </h6>
                         </div></a>
                       </div> 
                       <div class="card card-hover">
                         <a style="text-decoration: none" href="#">
                           <img style="width:200px;height:200px;"
                            src="Img/hp-zbook-17-g6-core-i7-9850h-up-to-4-60ghz-ram-32gb-ssd-512gb-m-2-pcle-rtx-3000-6gb-17-3-ips-fhd-windows-10-pro_36540_1.jpg"/>
                         <hr>
                         <div class="card-body">
                            <h6 class="card-title">EliteBook 820 G3 2016 Core i5 6200U 2.3Ghz, Ram 8GB, SSD 256GB, 12.5" HD Full Box </h6>
                         </div></a>
                       </div> 
                       <div class="card card-hover">
                         <a style="text-decoration: none" href="#">
                           <img style="width:200px;height:200px;"
                            src="Img/hp-zbook-17-g6-core-i7-9850h-up-to-4-60ghz-ram-32gb-ssd-512gb-m-2-pcle-rtx-3000-6gb-17-3-ips-fhd-windows-10-pro_36540_1.jpg"/>
                         <hr>
                         <div class="card-body">
                            <h6 class="card-title">EliteBook 820 G3 2016 Core i5 6200U 2.3Ghz, Ram 8GB, SSD 256GB, 12.5" HD Full Box </h6>
                         </div></a>
                       </div> 
                       <div class="card card-hover">
                         <a style="text-decoration: none" href="#">
                           <img style="width:200px;height:200px;"
                            src="Img/hp-zbook-17-g6-core-i7-9850h-up-to-4-60ghz-ram-32gb-ssd-512gb-m-2-pcle-rtx-3000-6gb-17-3-ips-fhd-windows-10-pro_36540_1.jpg"/>
                         <hr>
                         <div class="card-body">
                            <h6 class="card-title">EliteBook 820 G3 2016 Core i5 6200U 2.3Ghz, Ram 8GB, SSD 256GB, 12.5" HD Full Box </h6>
                         </div></a>
                       </div>       
                </div>
                
                <div class="slider-items d-flex flex-nowrap">
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>            
                </div>
                <div class="slider-items d-flex flex-nowrap">
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>  
                      <div class="card text-white bg-secondary">
                        <div class="card-header">Van de thuong</div>
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>            
                </div>

              </div>

                  <div class="arrow_prev">
                    <span><i class="fas fa-angle-double-left">
                    </i></span>
                  </div>
                  <div class="arrow_next">
                    <span><i class="fas fa-angle-double-right">
                    </i></span>
                  </div>

            </div>
          </div>
      </section>
    </div>
    <!--Laptop-->
    <hr>
     <?php
     include("Modules/laptopIndex.php");
     ?>
     <!--May ban-->
    <br>
      <?php
     include("Modules/maybanIndex.php");
     ?>
     <!--Linh kien-->
    <br>
      <?php
     include("Modules/linhkienIndex.php");
     ?>   
    <br>
    <hr>
    <footer >
      <!--Footer-->
      <?php
      include("Modules/Footer.php");
      ?>
    </footer>
</div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="Js/Menu.js"></script>
    <script type="text/javascript" src="Js/slick.min.js"></script>
    <script type="text/javascript" src="Js/slick.js"></script>
    <script type="text/javascript" src="Js/loadMoreButton.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 
  </body>
</html> 