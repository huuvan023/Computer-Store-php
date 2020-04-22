<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$userEmail='';
$err=NULL;
if(isset($_POST['recoverBtn'])){
    if(!empty($_POST["userEmail"])){
        $userEmail = mysqli_real_escape_string($conn,$_POST["userEmail"]); 
        $newPW=rand(100000,500000);
        $query="UPDATE users SET password = $newPW WHERE email = '$userEmail' LIMIT 1";
        if(mysqli_query($conn,$query)){
        include 'library.php'; // include the library file
        require 'vendor/autoload.php';
           $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->CharSet = "UTF-8";
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = SMTP_UNAME;                 // SMTP username
                $mail->Password = SMTP_PWORD;                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom(SMTP_UNAME, "Ngô Hữu Văn");
                $mail->addAddress($_POST['userEmail'], $userFullName);     // Add a recipient | name is option
                $mail->addReplyTo(SMTP_UNAME, 'Ngô Hữu Văn');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "Thư xác nhận thay đổi mật khẩu";
                $mail->Body = "Xin chào $userEmail, đây là thư xác nhận thay đổi mật khẩu của bạn.<br>Mật khẩu mới của bạn là $newPW";
                $mail->AltBody = ""; //None HTML
                $result = $mail->send();
                if (!$result) {
                    echo "alert('Có lỗi xảy ra! ')";
                }
            } catch (Exception $e) {
               echo "alert('Có lỗi xảy ra!')";
            }
      mysqli_close($conn);
      }
    }else{
      die();
    }
}
?>
<form method="post" enctype="multipart/form-data">
<div class="wrapper">
    <div class="title">
      Khôi phục mật khẩu
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nhập Email khôi phục: </label>
          <input  type="text" name="userEmail"  class="input" required
          pattern="^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$" autofocus 
          oninvalid="this.setCustomValidity('Email không hợp lệ!')"
          oninput="this.setCustomValidity('')" />
       </div>  
       <div class="inputfield">
          <p><a href="/PHP/Forms/Login-Register.php?view=log-reg&label=login">Đăng nhập</a></p>
       </div>
      <div class="inputfield">
        <input type="submit" name="recoverBtn" value="Gửi mật khẩu" class="btn">
      </div>
    </div>
</div>
</form>
