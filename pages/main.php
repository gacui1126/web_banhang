<div id="main">
            <?php
              include("pages/sidebar/sidebar.php");
            ?>
            <div class="maincontent">
              <?php
                $tam = isset($_GET['quanly']) ? $_GET['quanly'] : '';
                if($tam == 'danhmucsanpham'){
                  include('main/danhmuc.php');
                }elseif($tam == 'giohang'){
                  include('main/giohang.php');
                }elseif($tam == 'tintuc'){
                  include('main/tintuc.php');
                }elseif($tam == 'lienhe'){
                  include('main/lienhe.php');
                }elseif($tam == 'sanpham'){
                  include('main/sanpham.php');
                }elseif($tam == 'dangky'){
                  include('main/dangky.php');
                }elseif($tam == 'thanhtoan'){
                  include('main/thanhtoan.php');
                }elseif($tam == 'dangnhap'){
                  include('main/dangnhap.php');
                }elseif($tam == 'timkiem'){
                  include('main/timkiem.php');
                }elseif($tam == 'message'){
                  include('main/message.php');
                }elseif($tam == 'doimk'){
                  include('main/doimk.php');
                }else{
                  include('main/index.php');
                };
              ?>      
            </div>    
        </div>