<?php
$userName=$userPass="";
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["userName"])){
        $userName=test_input($_POST["userName"]);
    }
    if(!empty($_POST["userPass"])){
        $userPass=test_input($_POST["userPass"]);
    }
}
?>
<form id="login" method="post" enctype="multipart/form-data">
<div class="wrapper">
    <div class="title">
      Đăng nhập
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Tên đăng nhập: </label>
          <input type="text" required placeholder="Tên đăng nhập..."
          value="<?php if(!empty($_COOKIE["Name"])){echo $_COOKIE["Name"];}else{echo $userName; }  ?>" 
          pattern="^[A-z_](\w|\.|_){5,32}$"
          name="userName" class="input" autofocus  required
          oninvalid="this.setCustomValidity('Vui lòng điền đúng tên đăng nhập!')"
          oninput="this.setCustomValidity('')" title="Tên đăng nhập"  />
       </div>  
        <div class="inputfield">
          <label>Mật khẩu: </label>
          <input type="password" name="userPass" placeholder="Mật khẩu..."
          value="<?php if(!empty($_COOKIE["Pass"])){echo $_COOKIE["Pass"];}else{echo $userPass; }  ?>" class="input"  autofocus required
          oninvalid="this.setCustomValidity('Vui lòng điền mật khẩu!')"
          oninput="this.setCustomValidity('')" title="Mật khẩu"  />
       </div>   

    

      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" 
            <?php if(!empty($_COOKIE["Pass"]) && !empty($_COOKIE["Name"])){echo "checked";}else{ echo "";}?> 
            name="remember" id="ckbx" value="false">
            <span class="checkmark" name="remember"></span>
          </label>
          <p>Nhớ mật khẩu</p>
       </div> 
       <div class="inputfield">
        <p >Bạn chưa có tài khoản? 
        <a href="/PHP/Forms/Login-Register.php?view=log-reg&label=register">Đăng kí</a></p>
        <p style="margin-left: 20px" >
          <a href="/PHP/Forms/Login-Register.php?view=log-reg&label=recoverPW">Quên mật khẩu</a></p>
        </div>
      <div class="inputfield">
        <input type="submit" id="loginBtn" value="Đăng nhập" class="btn">
      </div>
    </div>
</div>
</form>
