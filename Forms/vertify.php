<?php
if(isset($_GET['vkey'])){
  //Các bước cbi xác nhận email
  include("../Connection/connection.php");
  $vkey = $_GET['vkey'];
  $result = mysqli_query($conn,"SELECT verified,vkey FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");
  if($result -> num_rows == 1){
    //Xác nhận Email
    $update = mysqli_query($conn,"UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
    if($update){
      echo "Tài khoản của bạn đã được xác nhận! <br> Chuyển hướng sau 5s...";

      header( "refresh:5;url=/PHP/Forms/Login-Register.php?view=log-reg&label=login" );
    }
    else{
      echo "Có lỗi xảy ra";
    }
  }else{

  }
}else{
  die("Có gì đó sai sai??");
}

?>