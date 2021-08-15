
<?php


session_start();

//  $name= '';
//  $email= '';
//  $address= '';
//  $gender= '' ;
//  $dbo= '' ;
//  $fileup= '';

if(isset($_POST['submit']))
{

// $id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['add'];
$gender=$_POST['gender'];
$dbo=$_POST['dbo'];
$fileup=$_FILES['image'];


if($name != '' && $email != '' && $address != '')
{
    $employee=['name' => $name ,'email' => $email, 'add' => $address,'gender' => $gender, 'dbo' => $dbo, 'image'=>$fileup];
    $_SESSION['Employess']=$employee;
    //echo "All the employees informations are set";

    if(strlen($name)< 3){

        echo("not a valid name");
    }

    $filename=$_FILES['image']['name'];
$filesize=$_FILES['image']['size'];
$filetemp=$_FILES['image']['tmp_name'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$filestore=array('png','jpg','jpeg');

// $location= 'images/'.$filename;
if(in_array($filecheck,$filestore)){

    $location= '../view/images/'.$filename;
    move_uploaded_file($filetemp,$location);

    
    
    
     $sql="INSERT INTO  `employees`( `name`, `email`, `address`, `gender`, `date of birth`,`file upload`) VALUES ('$name','$email','$address','$gender','$dbo','$location')";
 

    //making connection
    require_once("../model/conn.php");
    
     //making query
    
     $query=mysqli_query($conn,$sql) or die("Data insert error");

     
    
    
     if($query){
    
        echo " Registration successfully";
     }
            
      
 
        }
}
}



else{
echo "not set";

}




?>



<?php

 //$mysqli=new mysqli('localhost','root','','onlinejobportal') or die(mysqli_error($mysqli));
  require_once('../model/conn.php');
$result=$conn->query("SELECT * FROM employees") or die('error');

 ?>



<div class='hi'>

<table class='table'>

<thead>

<tr>


<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>Date Of Birth</th>
<th colspan="2">Action</th>


</tr>

</thead>


<?php

while($row = $result->fetch_assoc()):

?>

<tr>
     <!-- <td> <?php //echo $row['id']; ?> </td> -->
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['email']; ?></td>
    <td> <?php echo $row['address']; ?></td>
    <td> <?php echo $row['gender']; ?></td>
    <td> <?php echo $row['date of birth']; ?></td>
    <td>
       
    <a href="../model/update.php?i=<?php echo $row['id']; ?>">Update</a>
    <!-- <a href="EmployeeCheck.php?delete=<?php //echo $row['id']; ?>">Delete</a> -->
    <a href="../model/delete.php?i=<?php echo $row['id']; ?>">Delete</a>


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