<?php
// require_once("../model/conn.php");
$conn=mysqli_connect("localhost","root","","onlinejobportal");

//getting data from employee table
$result=mysqli_query($conn,"SELECT * FROM 'employees' ");

//storing in array

$data=array();

while($row=mysqli_fetch_assoc($result))
{
    $data[]=$row;
}

//returning response in json formet

echo json_encode($data);



// $json=array();

// $sql="SELECT * FROM 'employees' ";
// $stmt=$conn->prepare($sql);
// $stmt->execute();
// $result=$stmt->get_result();

// while($row=$result->fetch_assoc()){
// array_push($json,$row);

// }

// echo json_encode($json);

?>