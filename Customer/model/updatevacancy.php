<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>

.vacancy{

    background:#adebeb;

}

#submitvacancy{
    background:#0f3e3e;
    color:white;

}

.formerror{

    color:red;
}
    </style>
    <title>Employees</title>
</head>


<body>
    
<?php $i=$_GET['i']; ?>
    
        <table border="1" height="200" width=500 id='vacancy' >
         
        
        <tbody>
        <tr>
        <th>
        <form  method='post' >
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">VACANCY</legend>

        <input type='Hidden' name='id' value="<?php echo $i ; ?>">
        
        <div class='vacancy' id='vreason'>
        Reason:             <input type="text" name="reason" ><b><span class='formerror'> </span></b>
       </div>
       <div class='vacancy' id='strtdate'>
        Starting Date:            <input type="date" name="sd" ><b><span class='formerror'> </span></b>
        </div>
       <div class='vacancy' id='fndate'>
        Finishing Date:         <input type="date" name="fd" ><b><span class='formerror'> </span></b>
        </div>
     
       
        
        <input id='submitvacancy' type="submit" name="submit" value="Post">
        
        </fieldset>
        
        </form>
        </th>
        </tr>
        </tbody>
        
        <tfoot>
        
        <tr>
        <th>
        <center><a href="../controller/VacancyCheck.php">View Records</center>
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

    
   
    

 $id=$_POST['id'];
 $reason=$_POST['reason'];
 $startingdate=$_POST['sd'];
 $finishingdate=$_POST['fd'];
 



    
    
    
    
$sql="update `vacancy` set  `reason`='$reason',`starting date`='$startingdate',`finishing date`='$finishingdate'  WHERE 'id'='$id' ";
 

    
     //making query
    
     $query=mysqli_query($conn,$sql) ;

     
    
    
}




?>
