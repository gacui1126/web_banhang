<?php
    
    $sql_product = "SELECT * FROM tbl_sanpham ORDER BY tbl_sanpham.id_sanpham ASC LIMIT 25";
    $query_product = mysqli_query($mysqli,$sql_product);   
    
?>
<ul class="product_list">
    <?php
        while ($row = mysqli_fetch_array($query_product)) {
            ?>
                    <li>
                        <a style="text-decoration: none;" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="120" height="170">
                            <div class="title_product">
                                <p><?php echo $row['tensp']?></p>
                            </div>
                            <p class="price_product"><?php echo $row['giasp']?></p>
                        </a> 
                    </li>
    <?php
        }
    ?>
</ul>