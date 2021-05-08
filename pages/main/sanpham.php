
<?php
  $mysql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
  $query_chitiet = mysqli_query($mysqli,$mysql_chitiet);
  while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
      ?>
      <div class="wrapper_chitiet">
  <div class="hinhanh_sp">
      <img width="80%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
  </div>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
  <div class="chitiet_sp">
      <h3 style="margin:0;"><?php echo $row_chitiet['tensp']?></h3>
      <p>Mã sp: <?php echo $row_chitiet['masp']?></p>
      <p><?php echo number_format($row_chitiet['giasp'], 0, ',', '.')?> vnđ</p>
      <p>Số lượng còn lại: <?php echo $row_chitiet['soluong']?></p>
      <p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc']?></p>
      <p><button class="addtocart" name="themgiohang" type="submit" ><i class="fas fa-shopping-bag"></i> Thêm vào giỏ</button></p>
  </div>
</form>
</div>
<?php
  }
?>
