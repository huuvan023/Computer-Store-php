<?php
session_start();
include("../Connection/connection.php");
if($_GET["view"] == "account"){
	if($_GET["action"] == "logout"){
		session_unset();
		session_destroy();
		header('Location:/PHP/index.php');
	}
	if($_GET["action"] == "updateAccount"){
		$error='';
		$fullName = isset($_POST["fullName"]) ? (string)$_POST["fullName"] : false;
		$email = isset($_POST["email"]) ? (string)$_POST["email"] : false;
		$phoneNumber = isset($_POST["phoneNumber"]) ? (int)$_POST["phoneNumber"] : 0;
		$gender = isset($_POST["gender"]) ? (string)$_POST["gender"] : false;
		$address = isset($_POST["address"]) ? (string)$_POST["address"] : false;
		$id = $_SESSION["id"];
		if(empty($_POST["toggleChangePW"])){
			$sql = "UPDATE users SET fullname = '$fullName',email = '$email', gender = '$gender', phone = $phoneNumber, address = '$address' WHERE id = $id ";
				if(mysqli_query($conn, $sql)){
				$data = array('success' => "Cập nhật thông tin thành công!");
				mysqli_close($conn);
				}
				else{
				$data = array('fail' => "Cập nhật mật khẩu không thành công!");
				}
				echo json_encode($data);
			}
		else{
		$currentPW = isset($_POST["currentPW"]) ? (string)$_POST["currentPW"] : false;
		$newPW = isset($_POST["newPW"]) ? (string)$_POST["newPW"] : false;
		$confirmPW = isset($_POST["confirmPW"]) ? (string)$_POST["confirmPW"] : false;
		if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$/",$newPW) || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$/",$confirmPW)){
			$data = array('fail' => "Bạn phải nhập đầy đủ mật khẩu, mật khẩu mới và mật khẩu xác nhận!");
		}else{
			if( $currentPW == $_SESSION["password"]){
				if( $newPW == $confirmPW){
					$sql = "UPDATE users SET fullname = '$fullName',password = '$newPW',email = '$email', gender = '$gender', phone = $phoneNumber, address = '$address' WHERE id = $id ";
					if(mysqli_query($conn, $sql)){
					$_SESSION["password"] = $newPW;
					$data = array('success' => "Cập nhật thông tin thành công!");
					mysqli_close($conn);
					}
					else{
					$data = array('fail' => "Cập nhật mật khẩu không thành công!");
					}
				}
				else{
					$data = array('fail' => "Mật khẩu mới và xác nhận mật khẩu không trùng khớp!");
				}
			}else{
				$data = array('fail' => "Mật khẩu không chính xác!");
			}
		}
		echo json_encode($data);
	}
	}
}
?>