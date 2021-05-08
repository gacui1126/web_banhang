<?php 
  if(isset($_POST['doimk'])){
    $taikhoan = $_POST['email'];
    $matkhau_cu = md5($_POST['password-old']);
    $matkhau_moi = md5($_POST['password-new']);
    $sql_login = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND password='".$matkhau_cu."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql_login);
    $count = mysqli_num_rows($row);
    if($count > 0 ){
      $sql_update=mysqli_query($mysqli,"UPDATE tbl_dangky SET password='".$matkhau_moi."' ");

      echo '<p style="color:green;">"Thay đổi mật khẩu thành công!!!."</p>';
    }else{
      echo '<p style="color:red;">"Mật khẩu hoặc tài khoản không đúng, vui lòng nhập lại."</p>';
    }
  }
?>
<!-- <form action="" method="POST" autocomplete="off">
  <table border="1" class="table-login" style="text-align:center;border-collapse: collapse;">
    <tr>
      <td colspan="2">
        <h3>
          Đổi mật khẩu
        </h3>
      </td>
    </tr>
    <tr>
      <td>Tài khoản</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>Mật khẩu cũ</td>
      <td><input type="text" name="password-old"></td>
    </tr>
    <tr>
      <td>Mật khẩu mới</td>
      <td><input type="password" name="password-new"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" value="Đổi mật khẩu" name="doimk">
      </td>
    </tr>
    
  </table>
  </form> -->
  <form action="" method="POST" autocomplete="off">
  <div class="to">
              <div class="form-doimk">
                  <h2>Đổi mật khẩu</h2>
                  <i class="fas fa-users"></i>
                  <label style="margin-left: -180px;">Email</label>
                  <input type="text" name="email" required="">  
                  <label style="margin-left: -130px;">Mật khẩu cũ</label>
                  <input type="password" name="password-old" required="">
                  <label style="margin-left: -120px;">Mật khẩu mới</label>
                  <input type="password" name="password-new" required="">
                  <input type="submit" name="doimk" value="Đổi mật khẩu">
              </div>          
  </div>
</form>