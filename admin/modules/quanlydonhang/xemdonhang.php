<h3>Xem đơn hàng</h3>
<?php
  $code = $_GET['code'];
  $sql_lietke_dh= "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart = '".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh); //conect tới databyte
?>

<table class="container" style="width:100%">
  <tr>
    <th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên Sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>

  <?php
    $tong = 0;
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;
      $tong += $row['giasp'] * $row['soluongmua'];   
  ?>

  <tr style="text-align: center;">
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensp'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.') ?> vnđ</td>
    <td><?php echo number_format($row['giasp']*$row['soluongmua'],0,',','.') ?> vnđ</td>
  </tr>
  <?php
  };
  ?>
  <tr>
    <td colspan="6" style="text-align:center;"> Tổng tiền : <?php echo number_format($tong,0,',','.') ?> vnđ </td>
  </tr>
</table>