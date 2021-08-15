<?php


session_start();

if(isset($_POST['submit']))
{

$reason=$_POST['reason'];
$startingdate=$_POST['sd'];
$finishingdate=$_POST['fd'];

if($startingdate != '' && $finishingdate != '')
{
    $vacancy=['reason' => $reason ,'sd' => $startingdate, 'fd' => $finishingdate];
    $_SESSION['vacancy']=$vacancy;
    echo "session variables are set";

    $sql="INSERT INTO `vacancy`( `reason`, `starting date`, `finishing date`) VALUES ('$reason',' $startingdate', '$finishingdate')";

    //making connection
      require_once("../model/conn.php");
    
    //making query
    
    $query=mysqli_query($conn,$sql) or die("Data insert error");
    
    if($query){
    
        echo " Registration successfully";
    }

}else{
echo "not set";

}

}


?>



<?php

 //$mysqli=new mysqli('localhost','root','','onlinejobportal') or die(mysqli_error($mysqli));
  require_once('../model/conn.php');
$result=$conn->query("SELECT * FROM vacancy") or die('error');

 ?>

<div class='hlw'>

<table class='table1'>

<thead>

<tr>


<th>Reason</th>
<th>Starting date</th>
<th>Finishing date</th>

<th colspan="2">Action</th>


</tr>

</thead>


<?php

while($row = $result->fetch_assoc()):

?>

<tr>
     <!-- <td> <?php //echo $row['id']; ?> </td> -->
    <td> <?php echo $row['reason']; ?> </td>
    <td> <?php echo $row['starting date']; ?></td>
    <td> <?php echo $row['finishing date']; ?></td>
    

    <td>
       
    <a href="../model/updatevacancy.php?i=<?php echo $row['id']; ?>">Update</a>
    <!-- <a href="EmployeeCheck.php?delete=<?php //echo $row['id']; ?>">Delete</a> -->
    <a href="../model/deletevacancy.php?i=<?php echo $row['id']; ?>">Delete</a>


    </td>


</tr>

<?php

endwhile;

?>

</table>

</div>



<?php

function pre_r($array){

    echo '<pre>';
    print_r($array);
    echo "</pre>";

}

?>