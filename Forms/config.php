<?php
session_start();
include("../Connection/connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if($_GET["view"] == "register"){	
	$userFullName= isset($_POST["userFullName"]) ? (string)$_POST["userFullName"] : false;
	$userName=isset($_POST["userName"]) ? (string)$_POST["userName"] : false;
	$userPass=isset($_POST["userPass"]) ? (string)$_POST["userPass"] : false;
	$userEmail=isset($_POST["userEmail"]) ? (string)$_POST["userEmail"] : false;
	$userGender=isset($_POST["userGender"]) ? (string)$_POST["userGender"] : false;
	$userPhoneNumber=isset($_POST["userPhoneNumber"]) ? (int)$_POST["userPhoneNumber"] : false;
	$userAddress=isset($_POST["userAddress"]) ? (string)$_POST["userAddress"] : false;
	$vkey = md5(time().$userName);
	$captcha_error = '';

	if(isset($_POST["userFullName"]))
	{
		if(empty($_POST['g-recaptcha-response'])) {
		  $data  = array('fail' =>  "Xin vui lòng xác nhận captcha!");
		 }
	else {
			  $secret_key = '6Lf6ct8UAAAAANiPeyUqyONjVNoo999F9ev91hEe';

			  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
			//json_decode mã hóa dữ liệu thành object
			  $response_data = json_decode($response);

			  if(!$response_data->success)
			  {
			   $data  = array('fail' =>  "Captcha không chính xác!");
			  }
			  $sql = "INSERT INTO users(fullname, name, password,email,vkey,gender,phone,address,type) 
		VALUES ('$userFullName','$userName','$userPass','$userEmail','$vkey','$userGender',$userPhoneNumber,'$userAddress','users')";
			  $checkMail = mysqli_query($conn,"SELECT * FROM users WHERE email ='$userEmail'");
			if(mysqli_num_rows($checkMail) == 0){
				if($captcha_error == '' && mysqli_query($conn, $sql) == true) {

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
	                    $mail->Subject = "Thư xác nhận Email";
	                    $mail->Body = "Xin chào $userEmail, đây là thư xác nhận Email của bạn.<br>
	                    				Vui lòng nhấn vào <a href='http://localhost/PHP/Forms/vertify.php?vkey=$vkey'>đường dẫn này</a> 
	                    				để xác nhận tài khoản của bạn!";
	                    $mail->AltBody = ""; //None HTML
	                    $result = $mail->send();
	                    if (!$result) {
	                        $data = array( 'fail'  => "Có lỗi trong quá trình gởi Email!" );
	                    }else{
	                    	$data = array( 'success'  => "Bạn đã tạo tài khoản thành công. Vui lòng kiểm tra hộp thư để kích hoạt tài khoản! " );
	                    }
	                } catch (Exception $e) {
	                   $data = array( 'fail'  => "Có lỗi xảy ra!" );
	                }
	            }
      		}
      		else{
      			$data = array( 'fail'  => "Email đã được sử dụng!" );
      		}
		}
		
		//mã hóa dữ liệu thành object
		 echo json_encode($data);
		 //Đóng kết nối
		mysqli_close($conn);
	}
}
if($_GET["view"] == "login"){
	$userName=isset($_POST["userName"]) ? (string)$_POST["userName"] : false;
	$userPass=isset($_POST["userPass"]) ? (string)$_POST["userPass"] : false;	

	$userName=mysqli_real_escape_string($conn,$userName);
	$userPass=mysqli_escape_string($conn,$userPass);

	if(!empty($_POST["remember"])){
		setcookie("Name",$userName, time() + (86400 * 30), "/");
		setcookie("Pass",$userPass, time() + (86400 * 30), "/");
	}else{
		setcookie("Name","", time() - 3600, "/");
		setcookie("Pass","", time() - 3600, "/");	
	}
	
	$sql = "SELECT * from users WHERE name='$userName' AND password='$userPass' LIMIT 1";

	if ($result = mysqli_query($conn, $sql)) {
	   if(mysqli_num_rows($result) > 0 ){
	   	$row = $result -> fetch_assoc();
	   	$vertified = $row["verified"];
	   	$email = $row["email"];
	   	$date = $row["createdate"];
		$date = strtotime($date);
		$id = $row["id"];
	   	$date = date('Y-m-d h:i:s',$date);
		   	if($vertified == 1){
			    $_SESSION["user"]=$userName;
			    $_SESSION["password"] = $userPass;
				$_SESSION["type"] = $row["type"];
				$_SESSION["id"] = $row ["id"];
			      $data = array(
				   'success'  => true
				  );
		    }
		    else{
		    	$data = array( 'fail'  => "Tài khoản này chưa được xác nhận!
		    	 Thư xác nhận đã được gửi đến $email vào ngày $date!"  );
		    }
		}
		else{
			 $data = array( 'fail'  => "Tên tài khoản hoặc mật khẩu không chính xác!"  );
		}

	} else{
		$data = array( 'fail'  => "Đăng nhập thất bại! Vui lòng thử lại sau"  );
	}
	echo json_encode($data);
	//header('Location:/PHP/Forms/Login-Register.php?view=log-reg&label=register',true, 301);
	mysqli_close($conn);
}
?>