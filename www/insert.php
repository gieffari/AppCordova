<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_minuman=$_POST['nama_minuman'];
 $harga=$_POST['harga'];
 $stok=$_POST['stok'];
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"INSERT INTO `minuman` (`nama_minuman`,`harga`,`stok`,`id_penjual`) VALUES ('$nama_minuman','$harga','$stok','$id_penjual')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
