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
    

    
        <table border="1" height="200" width=500 id='vacancy' >
         
        
        <tbody>
        <tr>
        <th>
        <form action='../controller/VacancyCheck.php' method='post' name="myForm" onsubmit="return validateForm()">
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">VACANCY</legend>
        
        <div class='vacancy' id='vreason'>
        Reason:             <input type="text" name="reason" required><b><span class='formerror'> </span></b>
       </div>
       <div class='vacancy' id='strtdate'>
        Starting Date:            <input type="date" name="sd" required><b><span class='formerror'> </span></b>
        </div>
       <div class='vacancy' id='fndate'>
        Finishing Date:         <input type="date" name="fd" required><b><span class='formerror'> </span></b>
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
        Copyright &copy 2021
        </th>
        </tr>
        
        </tfoot>
        
        </table>

</body>
</html>

<script>
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

var reason = document.forms['myForm']['reason'].value;

    if (reason.length<4){
        seterror("vreason", "*reason not valid");
        returnval = false;
    }
    
    var start = document.forms['myForm']['sd'].value;
    var finish = document.forms['myForm']['fd'].value;

    if (finish==start){
        seterror("fndate", "*not valid");
        returnval = false;
    }
    
     return returnval;
    }



    </script>