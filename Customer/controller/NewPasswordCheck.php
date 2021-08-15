<?php
session_start();
if(isset($_POST['submit']))
{

$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if($password==$confirmpassword){

    $newpassword=['password'=>$password,'confirmpassword'=>$confirmpassword];
    $_SESSION['Newpassword']=$newpassword;

    //echo "Password set";
    header('location:../view/Login.php');
}else{

    echo "error";
}

}

?>