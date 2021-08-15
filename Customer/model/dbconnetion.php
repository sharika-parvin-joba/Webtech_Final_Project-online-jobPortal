<?php
// session_start();
//  require_once('conn.php');
//  //require_once('../controller/EmployeeCheck.pjp');

//  $name= '';
//  $email= '';
//  $address= '';
//  $gender= '' ;
//  $dbo= '' ;
//  $fileup= '';


//  if(isset($_POST['submit']))
//  {
 
//  $name=$_POST['name'];
//  $email=$_POST['email'];
//  $address=$_POST['add'];
//  $gender=$_POST['gender'];
//  $dbo=$_POST['dbo'];
//  $fileup=$_FILES['image'];

//  $_SESSION['message']="record has been saved";
//  $_SESSION['msg_type']="success";
 
//  $conn->query("INSERT INTO  `employees`( `name`, `email`, `address`, `gender`, `date of birth`,`file upload`) VALUES ('$name','$email','$address','$gender','$dbo','$location')") ;
 
// header("location:../view/Employee.php");


// }

// if(isset($_GET['delete'])){

//     $id=$_GET['delete'];
//     $conn->query("DELETE FROM 'employees' WHERE id=$id");

//     $_SESSION['message']="record has been deleted";
//  $_SESSION['msg_type']="deleted!";
 
// }


// if(isset($_GET['edit'])){

//     $id=$_GET['edit'];
//     $result=$conn->query("SELECT FROM 'employees' WHERE id=$id");

//     if(count($result)==1){

//      $row=$result->fetch_array();
//      $name=$row['name'];
//      $email=$row['email'];
//     $address=$row['add'];
//      $gender=$row['gender'];
//      $dbo=$row['dbo'];
//      $fileup=$row['image'];


//     }

//     $_SESSION['message']="record has been deleted";
//  $_SESSION['msg_type']="deleted!";
 
// }


?>