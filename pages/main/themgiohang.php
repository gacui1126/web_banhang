<?php
  session_start();
  include('../../admin/config/config.php');
  //them so luong
  if(isset($_GET['cong'])){
    $id = $_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
      if($cart_item['id'] != $id){
        $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong']  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        $_SESSION['cart'] = $product;
      }else{
        if($cart_item['soluong'] < 10){
          $tang = $cart_item['soluong'] + 1;
          $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $tang  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        
        }else{
          $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong']  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        
        }
        $_SESSION['cart'] = $product;
        
      }
      
    }header('Location:../../index.php?quanly=giohang');
  }
  //tru so luong
  if(isset($_GET['tru'])){
    $id = $_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
      if($cart_item['id'] != $id){
        $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong']  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
      }else{
        if($cart_item['soluong'] > 1 ){
          $giam = $cart_item['soluong'] - 1;  
          $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $giam  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        }else{
          
          $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong']  ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        }
        $_SESSION['cart'] = $product;
      }
    }
    header('Location:../../index.php?quanly=giohang');
  }

  //xoa sp
  if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){
      if($cart_item['id'] != $id){
        $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'] ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
      }
      $_SESSION['cart'] = $product;
      header('Location:../../index.php?quanly=giohang');
    }
  }
  //xoa tat ca sp
   if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
     unset($_SESSION['cart']);
     header('Location:../../index.php?quanly=giohang');
   }
  //them sp
  if(isset($_POST['themgiohang'])){
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
      $new_product = array(array('tensp' => $row['tensp'], 'id' => $id, 'soluong' => $soluong,'giasp' => $row['giasp'],'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
      //kiem tra session ton tai chua
      if(isset($_SESSION['cart'])){
        $found = false;
        foreach($_SESSION['cart'] as $cart_item){
          if($cart_item['id'] == $id){
            $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'] + 1 ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $found = true;
          }else{
            $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'] ,'giasp' => $cart_item['giasp'],'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
          
          }
        
        }
        if($found == false){
          //liet ket du lieu
          $_SESSION['cart'] = array_merge($product,$new_product);
        }else{
          $_SESSION['cart'] = $product;
        }
      }else{
        $_SESSION['cart'] = $new_product;
      }
    }
    header('Location:../../index.php?quanly=giohang');

  }
?>