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
    

    <table>
        <table border="1" height="350" width=500 id='postjob' >
         
        
        <tbody id='jobpost'>
        <tr>
        <th>
        <form action='../controller/PostJobCheck.php' method='post' name="myForm" onsubmit="return validateForm()">
        <fieldset >
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Job Description</legend>
        <div class='postjob' id='pjname'>
        Company Name:      <input type="text" name="name" required><b><span class='formerror'> </span></b>
       </div>
       <div class='postjob' id='pjtitle'>
        Job Title          <input type="text" name="jobtitle" required><b><span class='formerror'> </span></b>
        </div>
       <div class='postjob' id='pjskills'>
        Required Skills:   <input type="text" name="skills" required><b><span class='formerror'> </span></b>
        </div>
       <div class='postjob' id='pjsal'>
        Salary:            <input type="number" name="salary" ><b><span class='formerror'> </span></b>
        </div>
       <div class='postjob' id='pjex'>
        Experience : <input type="number" name="experience"><b><span class='formerror'> </span></b>
        </div>
       <div class='postjob' id='pjdt' >
        Posting Date:<input type="date" name="postingdate" required><b><span class='formerror'> </span></b>
        </div>
       
        
        <input id='submitpostjob' type="submit" name="submit" value="Post" >
        
        </fieldset>
        
        
        </form>
        </th>
        </tr>
        </tbody>
        
        <tfoot>
        
        <tr>
        <th>
        Copyright &copy 2021
        </th>
        </tr>
        
        </tfoot>
        
        </table>

</body>
</html>



<script >

function clearErrors(){

errors = document.getElementsByClassName('formerror');
for(let item of errors)
{
    item.innerHTML = "";
}


}
function seterror(id, error){
//sets error inside tag of id 
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
var returnval = true;
clearErrors();

var pjname = document.forms['myForm']["name"].value;
    if (pjname.length<5){
        seterror("pjname", "*Length of name is too short");
        returnval = false;
    }
    
    

    var pjsal = document.forms['myForm']["salary"].value;
    if (pjsal.length>15){
        seterror("pjsal", "*Email length is too long");
        returnval = false;
    }
    
    
    return returnval;
    }


</script>