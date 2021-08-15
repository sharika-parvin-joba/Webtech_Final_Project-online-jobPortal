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

        #postjob{

            background:#efccff;
        }
        #pjname{
            background:white;
        }
        #pjtitle{
            background:white;
        }
        #pjskills{
            background:white;
        }
        #pjsal{
            background:white;
        }
        #pjex{
            background:white;
        }
        #pjdt{
            background:white;
        }
       
    </style>
    <title>Employees</title>
</head>
<body id='hi'>
    
<?php $i=$_GET['i']; ?>
    <table>
        <table border="1" height="350" width=500 id='postjob' >
         
        
        <tbody id='jobpost'>
        <tr>
        <th>
        <form  method='post' >
        <fieldset >
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Job Description</legend>

        <input type='Hidden' name='id' value="<?php echo $i ; ?>">

        <div class='postjob' id='pjname'>
        Company Name:      <input type="text" name="name" >
       </div>
       <div class='postjob' id='pjtitle'>
        Job Title          <input type="text" name="jobtitle" >
        </div>
       <div class='postjob' id='pjskills'>
        Required Skills:   <input type="text" name="skills" >
        </div>
       <div class='postjob' id='pjsal'>
        Salary:            <input type="number" name="salary" >
        </div>
       <div class='postjob' id='pjex'>
        Experience : <input type="number" name="experience">
        </div>
       <div class='postjob' id='pjdt' >
        Posting Date:<input type="date" name="postingdate" >
        </div>
       
        
        <input id='submitpostjob' type="submit" name="submit" value="Update" >
        
        </fieldset>
        
        
        </form>
        </th>
        </tr>
        </tbody>
        
        <tfoot>
        
        <tr>
        <th>
        <center><a href="../controller/PostJobCheck.php">View Records</center>
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

 $name=$_POST['name'];
 $title= $_POST['jobtitle'];
 $skills= $_POST['skills'];
 $salary= $_POST['salary'];
 $experience=$_POST['experience'];
 $postingdate= $_POST['postingdate'];
 



    
    
    
    
$sql="update `jobpost` set  `name`='$name',`title`='$title',`skills`='$skills',`salary`='$salary',`experience`='$experience',`posting date`='$postingdate'  WHERE 'id'='$id' ";
 

    
     //making query
    
     $query=mysqli_query($conn,$sql) ;

     
    
    
}




?>
