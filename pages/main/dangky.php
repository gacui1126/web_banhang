<?php 
  if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $matkhau = md5($_POST['matkhau']);
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,password,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$dienthoai."')");
    if($sql_dangky){
      
      echo '<p style="color:green;margin-left:350px;"> Bạn đã đăng ký thành công</p>';
      $_SESSION['dangky'] = $tenkhachhang;
      $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

      //header('Location:index.php?quanly=giohang');
    }
  }
?>

<form action="" method="POST">
<div class="to">
            <div class="form-dangky">
                <h2>Đăng ký tài khoản</h2>
                <i class="fas fa-users"></i>
                <label style="margin-left: -150px;">Họ và tên</label>
                <input type="text" name="hovaten" required="">
                <label style="margin-left: -180px;">Email</label>
                <input type="text" name="email" required=""> 
                <label>Số điện thoại</label>
                <input type="text" name="dienthoai" required="">    
                <label style="margin-left: -170px;">Địa chỉ</label>
                <input type="text" name="diachi" required="">
                <label style="margin-left: -150px;">Mật khẩu</label>
                <input type="password" name="matkhau" required="">
                <input type="submit" name="dangky" value="Đăng ký">
                <label style="margin-left: 0px; margin-top:50px;"><a style="text-decoration: none;color:green" href="index.php?quanly=dangnhap">Nhấn vào đây để đăng nhập</a></label>
            </div>          
</div>
</form>