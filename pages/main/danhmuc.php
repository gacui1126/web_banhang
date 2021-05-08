<?php    
    $sql_product = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY tbl_sanpham.id_sanpham ASC";
    $query_product = mysqli_query($mysqli,$sql_product);   
    //get ten danh muc
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
    $query_cate= mysqli_query($mysqli,$sql_cate);  
    $row_title = mysqli_fetch_array($query_cate);
?>

<h3>Danh mục sản phẩm : <?php echo $row_title['tendanhmuc']?></h3>
<ul class="product_list">
  <?php
    while($row_product = mysqli_fetch_array($query_product)) {
        ?>
                    <li>
                        <a style="text-decoration: none;" href="index.php?quanly=sanpham&id=<?php echo $row_product['id_sanpham'] ?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row_product['hinhanh'] ?>">
                            <p class="title_product"><?php echo $row_product['tensp']?></p>
                            <p class="price_product"><?php echo number_format($row_product['giasp'],0,',','.')?> VNĐ</p>
                        </a>    
                    </li>
  <?php
    }
  ?>
</div>
</ul>