<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kdmenu=$_POST['kdmenu'];
 $nmmenu=$_POST['nmmenu'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `menu` (`kdmenu`,`nmmenu`,`harga`) VALUES ('$kdmenu','$nmmenu','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>