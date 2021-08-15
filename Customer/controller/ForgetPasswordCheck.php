<?php

session_start();
if(isset($_POST['submit']))
{

$email=$_POST['email'];
//$token=md5(rand());//this will generate a random number

if($email ==$_POST ['email']){
  $user=['email'=> $email];
$_SESSION['emailno']=$email;

 header('location:../view/NewPassword.php');


}
else{

  //  $_SESSION['status']='No Email found';
    header('location:../view/ForgetPassword.php');
   //echo "no ";

}

}


?>