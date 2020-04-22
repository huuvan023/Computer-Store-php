<?php
include("../Connection/connection.php");

	if(($_GET["view"]=="admin") && ($_GET["label"]=="manageProducts")){
		$ID =$_POST["ID"];
		$Name = $_POST["Name"];
		$Img = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));  
		$System = $_POST["System"];
		$Price= $_POST["Price"];
		$Status = $_POST["Status"];
		$Producer = $_POST["Producer"];
		if(isset($_POST["add"])){
			$sql = "INSERT INTO products (id,name,image,system,price,status,producer) 
			VALUES ($ID,'$Name','$Img','$System',$Price,'$Status','$Producer')";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		//header('Location:/PHP/Admin/index.php?view=admin&label=manageProducts',true, 301);
			mysqli_close($conn);
		}
 
		if(isset($_POST["update"])){
			$sql = "UPDATE products SET name='$Name', system='$System', price=$Price, status='$Status', producer='$Producer' WHERE id=$ID";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		header('Location:/PHP/Admin/index.php?view=admin&label=manageProducts',true, 301);
			mysqli_close($conn);
		}
		if(isset($_POST["delete"])){
			$sql = "DELETE FROM products WHERE id = $ID";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		header('Location:/PHP/Admin/index.php?view=admin&label=manageProducts',true, 301);
			mysqli_close($conn);
		}
	}

	if(($_GET["view"]=="admin") && ($_GET["label"]=="manageUsers")){
		$ID =$_POST["ID"];
		$Name = $_POST["Name"];
		$Password = $_POST["Password"];
		$Type= $_POST["Type"];
		if(isset($_POST["addUsers"])){
			$sql = "INSERT INTO users(id,name,password,type) 
			VALUES ($ID,'$Name','$Password','$Type')";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		header('Location:/PHP/Admin/index.php?view=admin&label=manageUsers',true, 301);
			mysqli_close($conn);
		}
		if(isset($_POST["updateUsers"])){
			$sql = "UPDATE users SET name='$Name',password='$Password',type='$Type' WHERE id=$ID";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		header('Location:/PHP/Admin/index.php?view=admin&label=manageUsers',true, 301);
			mysqli_close($conn);
		}
		if(isset($_POST["deleteUsers"])){
			$sql = "DELETE FROM users WHERE id=$ID";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		header('Location:/PHP/Admin/index.php?view=admin&label=manageUsers',true, 301);
			mysqli_close($conn);
		}

	}
 

?>