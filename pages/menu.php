<?php
     
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);   
?>
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);

    }
?>
<!-- <div class="menu">
            <ul class="listmenu">
                <li>
                    <a href="index.php">Trang Chủ</a>
                </li>
                <?php    
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                <?php
                    }
                ?>

                <li>
                    <a href="index.php?quanly=giohang">Giỏ Hàng</a>
                </li>
                <li>
                    <a href="index.php?quanly=tintuc">Tin Tức</a>
                </li>
                <li>
                    <a href="index.php?quanly=lienhe">Liên Hệ</a>
                </li>
                <?php
                    if (isset($_SESSION['dangky'])) {
                ?>
                    <li>
                        <a href="index.php?dangxuat=1">Đăng Xuất</a>
                    </li>
                    <li>
                    <a href="index.php?quanly=doimk">Thay đổi mật khẩu</a>
                    </li>
                <?php
                    }else{
                ?>
                    <li>
                        <a href="index.php?quanly=dangky">Đăng ký</a>
                    </li>
                    <li>
                        <a href="index.php?quanly=dangnhap">Đăng nhập</a>
                    </li>
                <?php
                    }
                ?>
            </ul>
            <a>
                
                <form action="index.php?quanly=timkiem" method="POST">
                    <input type="text" class="searchTerm" placeholder="Tìm kiếm sản phẩm ..." name="tukhoa">
                    <button type="submit" class="searchButton" name="timkiem" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
                
            </a>   -->
                
            <div class="header-menu">
                <a href="index.php" class="logo">Logo</a>
                <div class="header-right">
                    <a class="active" href="index.php">Trang chủ</a>
                    <a href="index.php?quanly=tintuc">Tin tức</a>
                    <a href="index.php?quanly=lienhe">Liên hệ</a>
                    <a href="index.php?quanly=giohang">Giỏ hàng</a>
                    <?php
                    if (isset($_SESSION['dangky'])) {
                    ?>
                        <a href="index.php?dangxuat=1">Đăng Xuất</a>
                        <a href="index.php?quanly=doimk">Thay đổi mật khẩu</a>
                    <?php
                    }else{
                    ?>
                        <a href="index.php?quanly=dangky">Đăng ký</a>
                        <a href="index.php?quanly=dangnhap">Đăng nhập</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
</div>