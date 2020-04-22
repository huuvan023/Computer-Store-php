<?php
$sql = "SELECT * FROM products";
$result=mysqli_query($conn, $sql);

function convert(int $number) {
  $array = array();
  $count = 0;
  while($number > 0.9){
    $num = $number;
    $kitu = $num % 10; 
    $number = $num / 10;
    array_push($array,$kitu);
    $count++;
    if($count == 3){
      array_push($array,",");
      $count = 0;
    }
  }
  return array_reverse($array);
}
function display($number){
  echo $number;
}

?>
 <div class="mt-3 card bg-light">
      <div class="card-header">
        <h4 style=" font-weight: 700;">
          <a href="/PHP/laptop.php" class="header"> 
          <i class="fas fa-laptop"></i> Laptop</a>
        </h4>
      </div>

    <div style="padding: 0;margin: 0;" class="wrap card-body">
        <?php
            if ($result->num_rows > 0) {
              while($row=$result ->fetch_array(MYSQLI_ASSOC)){ 
        ?>
     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 box box-hidden">
      <div class="row">
        <div style="width:100%;" class="card">
            <img class="center-Image" 
              src="Img/hp-zbook-17-g6-core-i7-9850h-up-to-4-60ghz-ram-32gb-ssd-512gb-m-2-pcle-rtx-3000-6gb-17-3-ips-fhd-windows-10-pro_36540_1.jpg"/>
            <hr>
            <div class="card-body">
              <h5 class="card-title  ">   <?php echo $row["name"]?>  </h5>
              <small class="card-text"><i>Tùy chọn 3 cấu hình</i></small>
              <p class="card-text"><small><del>17,090,000₫</del></small></p>
              <p class="card-text" style="color: red;">Giá : <?php 
              array_map("display", convert($row["price"]));?>₫</p>
              <hr>
              <small><i>Tình trạng: 
                <?php if($row["status"] == "true") { echo "Còn hàng";} 
                      else{ echo "Hết hàng";};  ?>
                </i></small>
            </div>
          </div>     
          <div class="overlay d-flex align-items-center">
            <div class="wrap-overlay">
            <a href="/PHP/laptop/products/<?php echo $row["id"];?>.php"  class="btn-overlay btn btn-default mb-1">Xem chi tiết</a>
            <br>
            <a href="#" class="btn-overlay btn btn-default mt-1">Thêm vào giỏ hàng</a>
            </div>
          </div>
        </div>
      </div>
          
          <?php
                        }
            }
        ?>







    </div>

      <div class=" d-flex wrap-button mt-3 mb-3 ">
        <a style=" text-decoration: none;" id="loadMore"
         href="#" class=" mx-auto btn-load">Xem thêm</a>
         <a style="display: none;" class="ml-auto mr-2" id="loadAll" href="/PHP/laptop.php">Xem tất cả...</a>
      </div>
    </div>