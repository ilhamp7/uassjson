<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kdmenu=$_POST['kdmenu'];
 $nmmenu=$_POST['nmmenu'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `menu` SET `kdmenu`='$kdmenu',`nmmenu`='$nmmenu',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>