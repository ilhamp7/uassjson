<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"SELECT menu.nmmenu, menu.harga, minum.nmmenu, minum.harga FROM menu, minuman WHERE menu.id=minuman.id");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>