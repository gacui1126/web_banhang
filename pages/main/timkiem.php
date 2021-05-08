<?php
    if(isset($_POST['timkiem'])){
      $tukhoa = $_POST['tukhoa'];
    }else{
      $tukhoa = '';
    }
    $sql_product = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%".$tukhoa."%' ";
    $query_product = mysqli_query($mysqli,$sql_product);   
?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<ul class="product_list">
    <?php
        while($row = mysqli_fetch_array($query_product)) {
            ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="120" height="170">
                            <p class="title_product"><?php echo $row['tensp']?></p>
                            <p class="price_product"><?php echo $row['giasp']?></p>
                        </a> 
                    </li>
    <?php
        }
    ?>
</ul>