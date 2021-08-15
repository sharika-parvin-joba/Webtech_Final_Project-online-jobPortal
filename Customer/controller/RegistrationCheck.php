

<?php


	session_start();

	if(isset($_POST['submit'])){
        

        $name=$_POST['name'];
        $email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$confirmpassword=$_POST['confirmpassword'];
        $address= $_POST['add'];
        $startingdate=$_POST['dos'];


		if($name != '' && $password != '' && $username != '' ){
   
			$user =['name'=> $name, 'email'=>$email, 'username'=> $username, 'password'=>$password, 'confirmpassword'=>$confirmpassword,'add'=>$address,'dos'=>$startingdate];
			$_SESSION['user'] = $user;
//sql statement
    
     $sql="INSERT INTO `registration`( `name`, `email`, `username`, `password`, `confirmpassword`, `address`, `date of submit`) VALUES ('$name','$email','$username','$password','$confirmpassword','$address','$startingdate')";
 

//making connection
  require_once("../model/conn.php");

//making query

$query=mysqli_query($conn,$sql) or die("Data insert error");

if($query){

	echo "$username Registration successfully";
}
		}
		else{
    echo "please fill all the fields";

		}
	}
		?>
	

	
<?php

//$mysqli=new mysqli('localhost','root','','onlinejobportal') or die(mysqli_error($mysqli));
 require_once('../model/conn.php');
$result=$conn->query("SELECT * FROM registration") or die('error');

?>

<div class='hlw1'>

<table class='table2'>

<thead>

<tr>


<th>Name</th>
<th>Email</th>
<th>Username</th>
<th>Password</th>
<th>ConfirmPassword</th>
<th>Address</th>
<th>Date Of submit</th>

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
   <td> <?php echo $row['username']; ?></td>
   <td> <?php echo $row['password']; ?> </td>
   <td> <?php echo $row['confirmpassword']; ?> </td>
   <td> <?php echo $row['address']; ?> </td>
   <td> <?php echo $row['date of submit']; ?> </td>

   <td>
	  
   <a href="../model/updatereg.php?i=<?php echo $row['id']; ?>">Update</a>
   <!-- <a href="EmployeeCheck.php?delete=<?php //echo $row['id']; ?>">Delete</a> -->
   <a href="../model/deletereg.php?i=<?php echo $row['id']; ?>">Delete</a>


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