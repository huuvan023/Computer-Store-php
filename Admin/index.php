<?php
include("../Connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>Laptop</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <div class="container-fluid">

      <div class="row">
        <h2 class="content">Trang quản trị admin</h2>
        <hr>
      </div>


      <ul class="nav nav-tabs">
        <li class="nav-item ">
          <a class="nav-link <?php if($_GET["label"] == "manageProducts"){echo("active");};?>"  href="/PHP/Admin/index.php?view=admin&label=manageProducts">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_GET["label"] == "manageUsers"){echo("active");};?>" 
            href="/PHP/Admin/index.php?view=admin&label=manageUsers">Người dùng</a>
        </li>
      </ul>

      <?php
        if(isset($_GET["view"]) == "admin "){
          include( $_GET["label"].".php");
         }
      ?>


      </div>



    </div>
      <script>
      function Admin(evt, purpose) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(purpose).style.display = "block";
        evt.currentTarget.className += " active";
      }
      function tableUpdate(evt, purpose,id) {
        var i, tabcontent, tablinks;
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        if((purpose == "Update")||(purpose == "Delete")){
        document.getElementById("delID").value = id
        document.getElementById("editID").value = id;
      }
        if((purpose == "UpdateUser")||(purpose == "DeleteUser")){
        document.getElementById("delUserID").value = id
        document.getElementById("editUserID").value = id;
      }
      
        document.getElementById(purpose).style.display = "block";
        evt.currentTarget.className += " active";
      }

      function Cancel(purpose){
        document.getElementById(purpose).style.display = "none";
        document.getElementById("delID").value = ""
        document.getElementById("editID").value = "";
      }
      function CancelUser(purpose){
        document.getElementById(purpose).style.display = "none";
        document.getElementById("delUserID").value = ""
        document.getElementById("editUserID").value = "";
      }
      $(document).ready(function(){  
      $('.add').click(function(){  
           var image_name = $('#Image').val();  
           if(image_name != '')  
           {  
                var extension = $('#Image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Hình ảnh không đúng!');  
                     $('#Image').val('');  
                     return false;  
                }  
           }  
          });  
        });  
        </script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>