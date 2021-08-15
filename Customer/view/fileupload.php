<?php


$filename=$_FILES['image']['name'];
$filesize=$_FILES['image']['size'];
$filetemp=$_FILES['image']['tmp_name'];

$location= 'images/'.$filename;

if(move_uploaded_file($filetemp,$location))
//source destination,
{
    echo "DONE";
}else{
    echo "error";
}


?>