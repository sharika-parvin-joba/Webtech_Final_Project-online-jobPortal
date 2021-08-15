<?php

session_start();

if(isset($_POST['submit'])){
        

    $name=$_POST['name'];
    $title= $_POST['jobtitle'];
    $skills= $_POST['skills'];
    $salary= $_POST['salary'];
    $experience=$_POST['experience'];
    $postingdate= $_POST['postingdate'];
    

    if($name != '' && $title != '' ){
        // $user1 = $name.",".$title.",".$skills."," .$salary.",". $experience.",".$postingdate;
        //$_SESSION['user1'] = $user1;

        if(strlen($name)< 5){

            echo("too short name");
        }

        $sql="INSERT INTO `postjob`( `name`, `title`, `skills`, `salary`, `experience`, `posting date`) VALUES ('$name','$title','$skills','$salary','$experience','$postingdate')";
 

    //making connection
      require_once("../model/conn.php");
    
    //making query
    
    $query=mysqli_query($conn,$sql) or die("Data insert error");
    
    if($query){
    
        echo " Registration successfully";
    }
    //     $file=fopen('jobpost.txt','a+');
    //     fwrite($file,$user1);
        
    //     fclose($file);

    //     echo "job description posted successfully ";
    //     //header('location: ../view/PostJob.php');
    // }else{
    //     echo "null value found...";
    // }
}
}
// else{
//     //header('location: ../view/PostJob.php');
//      echo "invalid request...";
// }


?>


<?php

 //$mysqli=new mysqli('localhost','root','','onlinejobportal') or die(mysqli_error($mysqli));
  require_once('../model/conn.php');
$result=$conn->query("SELECT * FROM postjob") or die('error');

 ?>

<div class='hlw'>

<table class='table1'>

<thead>

<tr>


<th>Company Name</th>
<th>Job title</th>
<th>Skills</th>
<th>Salary</th>
<th>Experience</th>
<th>Postingdate</th>
<th colspan="2">Action</th>


</tr>

</thead>


<?php

while($row = $result->fetch_assoc()):

?>

<tr>
     <!-- <td> <?php //echo $row['id']; ?> </td> -->
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['title']; ?></td>
    <td> <?php echo $row['skills']; ?></td>
    <td> <?php echo $row['salary']; ?></td>
    <td> <?php echo $row['experience']; ?></td>
    <td> <?php echo $row['posting date']; ?></td>

    <td>
       
    <a href="../model/updatejob.php?i=<?php echo $row['id']; ?>">Update</a>
    <!-- <a href="EmployeeCheck.php?delete=<?php //echo $row['id']; ?>">Delete</a> -->
    <a href="../model/deletejob.php?i=<?php echo $row['id']; ?>">Delete</a>


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

