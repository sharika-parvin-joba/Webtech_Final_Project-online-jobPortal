
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .formerror{

            color:red;
        }
        .employee{
            /* color:blue; */
            background:#cce0ff;
            color: black;
            font-size:20px;
        }

        #emp{

             /* background:#b8b894; */
             font-size:20px;
            
            
        }

        #submitemployee{
            background:#b8b894;
        }
    </style>
    <title>Employees</title>
</head>
<body >
    
<?php $i=$_GET['i']; ?>

    <table>
        <table border="1" height="500" width=500 id='employee' >
         
        

        <tbody align="center";>
        <tr>
        <th>
        <form  method='post'   enctype='multipart/form-data'>
        <fieldset align="center" >
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Update Employees Details</legend>
        
        <input type='Hidden' name='id' value="<?php echo $i ; ?>">
        
        <div class='employee' id='empname'>
        Name:             <input type="text" name="name"  placeholder="write your name" ><b><span class='formerror'> </span></b>
       </div>
       <div class='employee' id='empemail'>
        Email:            <input type="email" name="email"  placeholder="" ><b><span class='formerror'> </span></b>
        </div>
       <div class='employee' id='empadd'>
        Address:          <input type="text" name="add"  placeholder="" ><b><span class='formerror'> </span></b>
        </div>
       <div class='employee'>
        
        <fieldset>
        <legend>Gender</legend>
        
         <input type="radio" name="gender" value="male" >Male
          <input type="radio" name="gender" value="female"checked>Female
          <input type="radio" name="gender" value="others">Others 
        </fieldset>
        </div >
       <div class='employee'>
            
        <fieldset>
        <legend>Date of Birth</legend>
        
        <input type="date" name="dbo"  >
        
        </fieldset>
        </div>
        <div class='employee'>

<!-- <form method='post' action='' enctype='multipart/form-data'> -->

<fieldset>
    <legend>Upload Details</legend>
    <input type='file'  name='image' > 
<br>
    <!-- <input type='submit' name='submit' value='post'><br> -->
</fieldset>
<!-- </form><br> -->

</div>
      
        <input id='submitemployee' type="submit" name="submit" value="Update">
       
        
        </fieldset>
        
        </form>
        </th>
        </tr>
        </tbody>
        <tfoot>
            <th>
        <center><a href="../controller/EmployeeCheck.php">View Records</center>
        <th>
    </tfoot>
        </table>
     

<?php

    include('conn.php');


        if(isset($_POST['submit']))
{

    
   
    

 $id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['add'];
$gender=$_POST['gender'];
$dbo=$_POST['dbo'];
$fileup=$_FILES['image'];



    
    
    
    
$sql="update `employees` set  `name`='$name',`email`='$email',`address`='$address',`gender`='$gender',`date of birth`='$dbo',`file upload`='$fileup' WHERE 'id'='$id' ";
 

    
     //making query
    
     $query=mysqli_query($conn,$sql) ;

     
    
    
}




?>



