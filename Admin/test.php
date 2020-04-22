<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DEMO GỬI EMAIL</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

  <body>
    <br />
    <div class="inner contact">
      <div class="contact-form">
        <h1 align="center">TUANDC</h1>
        <h2 align="center">Hướng dẫn cách tạo form gửi Email bằng PHP sử dụng Gmail SMTP</h2>
        <hr>
        <form action="mail.php" method="post">
          <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
            <h3>Gửi Thử Email</h3>
            <input type="email" name="emainsend" required class="form" placeholder="Đến : Địa chỉ Email " />
            <input type="text" name="subject" required class="form" placeholder="Tiêu đề" />
            <textarea name="message" class="form textarea" placeholder="Nội dung"></textarea>
          </div>
          <button type="submit" id="submit" name="send" class="form-btn semibold">Gửi Mail</button>
          <div class="clear"></div>
        </form>
      </div>
    </div>
  </body>

</html>