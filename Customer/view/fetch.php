<?php
//fetch.php

if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "onlinejobportal");
 $query = "SELECT * FROM employees WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["name"] = $row["name"];
  $data["email"] = $row["email"];
  $data["address"] = $row["address"];
  $data["gender"] = $row["gender"];
  $data["d"] = $row["date of birth"];
 
 }

 echo json_encode($data);
}








?>