<?php 
  if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql_login = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND password='".$matkhau."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql_login);
    $count = mysqli_num_rows($row);
    if($count > 0 ){
      $row_data = mysqli_fetch_array($row);
      $_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
      echo '<p style="color:green;margin-left:350px;">Đăng nhập thành công</p>';
      //header('Location:index.php?quanly=giohang');
    }else{
      echo '<p style="color:red;margin-left:290px;">Mật khẩu hoặc email sai, vui lòng nhập lại</p>';
    }
  }
?>
<form action="" method="POST" autocomplete="off">
  <div class="to">
              <div class="form-login">
                  <h2>Đăng Nhập</h2>
                  <i class="fas fa-users"></i>
                  <label style="margin-left: -180px;">Email</label>
                  <input type="text" name="email" required="">  
                  <label style="margin-left: -150px;">Mật khẩu</label>
                  <input type="password" name="password" required="">
                  <input type="submit" name="dangnhap" value="Đăng Nhập">
              </div>          
  </div>
</form>