<?php
  include('../../config/config.php');
  $tensp = $_POST['tensp'];
  $masp = $_POST['masp'];
  $giasp = $_POST['giasp'];
  $soluong = $_POST['soluong'];
  //xử lý hình ảnh
  $hinhanh = $_FILES['hinhanh']['name'];
  $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
  $hinhanh = time().'_'.$hinhanh;//tranh trung lap hinh anh

  $tomtat = $_POST['tomtat'];
  $noidung = $_POST['noidung'];
  $tinhtrang = $_POST['tinhtrang'];
  $danhmuc = $_POST['danhmuc'];
  

  if(isset($_POST['themsp'])){
    //thêm
    $sql_them = "INSERT INTO tbl_sanpham(tensp,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUE('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);  //kết nối tới mysql
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);//NHỚ MỞ QUYỀN TRUY CẬP ĐỌC VÀ GHI
    header('Location:../../index.php?action=quanlysanpham&query=them');
  }elseif(isset($_POST['suasp'])){
    
    //sửa
    if($hinhanh !='') {
      move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
      
      $sql_update = "UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."', soluong='".$soluong."', hinhanh='".$hinhanh."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]' ";
      
      //xoa hinh
      $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
     }else{
      $sql_update = "UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."', giasp='".$giasp."', soluong='".$soluong."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli,$sql_update);  //kết nối tới mysql
    var_dump($_POST['suasp']);
    header('Location:../../index.php?action=quanlysanpham&query=them');
  }else{
    $id = $_GET['idsanpham'];
    //xoa hinh
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
      unlink('uploads/'.$row['hinhanh']);
    }

    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
  }

?>