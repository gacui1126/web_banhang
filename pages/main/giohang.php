<h3>Giỏ hàng của 
<?php
  if(isset($_SESSION['dangky'])){
   echo '<span style="color: brown">'.$_SESSION['dangky'].'</span>';
  }
?>
</h3>

<table class="container" style="width:100%;text-align:center;border-collapse : collapse;" border="1">
<thead>   
  <tr>
    <th>Id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  </thead>  
  <tbody>
  <?php
    if(isset($_SESSION['cart'])){
      $i = 0;
      $tong = 0;
      foreach ($_SESSION['cart'] as $cart_item) {
        $sub_total = $cart_item['soluong'] * $cart_item['giasp'];
        $tong += $sub_total;
        $i++;
          ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensp']; ?></td>
    <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150"></td>
    <td>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fas fa-plus-square fa-style"></i></a>
      <?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fas fa-minus-square fa-style"></i></a>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.') ?></td>
    <td><?php echo number_format($sub_total,0,',','.') ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>"><i class="fas fa-trash-alt"></i></a></td>
  </tr>
  <?php
      }
  ?>
  <tr>
    <td colspan="8">
    <p style="float: right;">Tổng tiền: <?php echo number_format($tong,0,',','.') ?> vnđ</p></br>
    </td>
  </tr>
      
      <!-- <p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p> -->
      <div style="clear:both;"></div>
  <?php
    }else{
  ?>
  <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
  </tr>
  <?php
    }
  ?>
  </tbody>

</table>
<div style="text-align:center;">
<?php
        if (isset($_SESSION['dangky'])) {
            ?>
        <!-- <p><a href="pages/main/thanhtoan.php"><i class="fas fa-shopping-bag"></i>Đặt hàng</a></p> -->
        <a href="pages/main/thanhtoan.php"><button type="submit" class="button-dathang"><i class="fas fa-shopping-bag"></i> Đặt hàng</button></a>
      <?php
        }else{
      ?>
        <p>Bạn cần <a href="index.php?quanly=dangky">đăng ký</a> để đặt hàng</p>
      <?php
        }
      ?>
</div>