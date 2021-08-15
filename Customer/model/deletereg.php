<?php

//include('conn.php');

$id=$_GET['i'];
//echo $id;
include('conn.php');
 $sql="DELETE FROM `registration` WHERE id=$id ";

 mysqli_query($conn,$sql);

header('location:../controller/RegistrationCheck.php');


?>