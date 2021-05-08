<?php
  $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
  $row_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp); //conect tới databyte
?>
<h3>Liệt kê sản phẩm</h3>
<table class="container" style="width:100%">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>

  <?php
    $i=0;
    while($row = mysqli_fetch_array($row_lietke_sp)){
      $i++;
  ?>
  <tr style="text-align: center;">
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensp'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150" height="200" ></td>
    <td><?php echo $row['giasp'] ?> VNĐ </td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']=="1"){
      echo "Kích hoạt";
      }else{
        echo "Không kích hoạt";
      }
      ?>
    </td>
    <td>
      <a style="text-decoration: none;" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> | <a style="text-decoration: none;" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a>
    </td>
  </tr>
  <?php
  };
  ?>
</table>