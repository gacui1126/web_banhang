<?php session_start();
  include('config/config.php');
  if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql_login = "SELECT * FROM admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql_login);
    $count = mysqli_num_rows($row);
    if($count > 0 ){
      $_SESSION['dangnhap'] = $taikhoan;
      header('Location: index.php');
    }else{
      //echo '<p style="color:red; margin-left:600px;">Mật khẩu hoặc email sai, vui lòng nhập lại</p>';
      echo '<script>alert("Sai tài khoản hoặc mật khẩu!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Đăng Nhập Admin</title>
  
</head>
<body>
<div class="container">
<form action="" method="POST" autocomplete="off">
  <div class="to">
              <div class="form-login">
                  <h2>Đăng Nhập Admin</h2>
                  <i class="fas fa-users"></i>
                  <label style="margin-left: -180px;" autocomplete="off">Tài khoản</label>
                  <input type="text" name="username" required="">  
                  <label style="margin-left: -150px;">Mật khẩu</label>
                  <input type="password" name="password" required="">
                  <input class="submit-login"type="submit" name="dangnhap" value="Đăng Nhập">
              </div>          
  </div>
</form>
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>
