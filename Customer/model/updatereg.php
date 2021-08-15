

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <style>
        .formerror{

            color:red;
        }

         .registration{
    
    
    width: 80%;
    padding: 5px 20px 10px 10px;
    border: 1px solid black;
    margin: 14px;
    border-radius: 4px;
    font-size: 15px;


} 

#registration{
margin-left: 22%;
margin-right: 30%;
margin-bottom: 20%;
text-align: center;


}
    </style>
    <title>  Registration</title>
</head>
<body >
<?php $i=$_GET['i']; ?>
   
        <table>
        <table border="1" height="400" width=800 id='registration'>
        
        
        <tbody align='center'>
        <tr>
        <th>
        <form  method='post' >
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Registration</legend>

        
        <input type='Hidden' name='id' value="<?php echo $i ; ?>">


        <div class='registration' id='regname'>
         Name:             <input type="text" name="name" ><b><span class='formerror'> </span></b>
        </div >
        <div class='registration' id='regemail'>
        Email:            <input type="email" name="email" ><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regusername'>
        Username:         <input type="text" name="username" ><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regpassword'>
        Password:         <input type="password" name="password" ><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regconfirmpassword'>
        Confirm Password: <input type="password" name="confirmpassword" ><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regaddress'>
        Address:          <input type="text" name="add" ><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' >
        
            
        <fieldset align="left" >
        <legend >Date of submitting</legend>
        
        <input type="date" name="dos" >
        </div>
        
        </fieldset><br>
        
        <input id='submitregistration' type="submit" name="submit" value="Submit"><br>
        
       
        
        </fieldset>
        
        </form>
        </th>
        </tr>
        </tbody>
        
        <tfoot>
        
        <tr>
        <th>
        <center><a href="../controller/RegistrationCheck.php">View Records</center>
        </th>
        </tr>
        
        </tfoot>
        
        </table>
        
        
</body>




</html>



<?php

    include('conn.php');


        if(isset($_POST['submit']))
{

    
   
 
    $name=$_POST['name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $address= $_POST['add'];
    $startingdate=$_POST['dos'];
 



    
    
    
    
$sql="update `registration` set  'name`='$name',`email`='$email',`username`='$username',`password`='$password',`confirmpassword`='$confirmpassword',`address`='$address',`date of submit`='$startingdate'  WHERE 'id'='$id' ";
 

    
     //making query
    
     $query=mysqli_query($conn,$sql) ;

     
    
    
}




?>
