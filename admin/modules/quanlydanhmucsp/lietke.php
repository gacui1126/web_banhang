<?php
  $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
  $row_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp); //conect tới databyte
?>

<h3>Liệt kê danh mục sản phẩm</h3>
<table class="container" style="width:100%">
  <tr>
    <th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>

  <?php
    $i=0;
    while($row = mysqli_fetch_array($row_lietke_danhmucsp)){
      $i++;
  ?>

  <tr style="text-align: center;">
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
      <a style="color:green;" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | <a style="color:red;" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a>
    </td>
  </tr>
  <?php
  };
  ?>
</table>