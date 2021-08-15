<?php

//include('conn.php');

$id=$_GET['i'];
//echo $id;
include('conn.php');
 $sql="DELETE FROM `employees` WHERE id=$id ";

 mysqli_query($conn,$sql);

header('location:../controller/EmployeeCheck.php');


?>