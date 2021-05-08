<?php
  $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
  $row_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp); //conect tới databyte
?>

<p>Sửa danh mục sản phẩm</p>
<table class="container" style="width:100%">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['id_danhmuc']?>">
  <?php
    while ($dong = mysqli_fetch_array($row_sua_danhmucsp)) {
        ?>
    <tr>
      <td>Tên danh mục</td>
      <td><input tyle="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" style="width:97%"></td>
    </tr>
    <tr>
      <td>Thứ tự</td>
      <td><input tyle="text" value="<?php echo $dong['thutu'] ?>" name="thutu" style="width:97%"></td>
    </tr>
    <tr>
      <td colspan="2"><input class="submit-sua" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm" ></td>
    </tr>
    <?php
    }
    ?>
  </form>
</table>