
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
    

    <table>
        <table border="1" height="500" width=500 id='employee' >
         
        <thead id='emp' align="right">
        <tr>
        <th>
      
        
        <a href="Login.php" >Login</a>|
        <a href="Registration.php" >Register</a>
        </th>
        </tr>
        </thead><br>

        <tbody align="center";>
        <tr>
        <th>
        <form action='../controller/EmployeeCheck.php' method='post'  name="myForm" onsubmit="return validateForm()" enctype='multipart/form-data'>
        <fieldset align="center" >
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Employees Details</legend>
        
        <!-- <div class='employee' id='empid'>
        ID:             <input type="text" name="id"  placeholder="" required><b><span class='formerror'> </span></b>
       </div> -->
        <div class='employee' id='empname'>
        Name:             <input type="text" name="name"  placeholder="write your name" required><b><span class='formerror'> </span></b>
       </div>
       <div class='employee' id='empemail'>
        Email:            <input type="email" name="email"  placeholder="" required><b><span class='formerror'> </span></b>
        </div>
       <div class='employee' id='empadd'>
        Address:          <input type="text" name="add"  placeholder="" required><b><span class='formerror'> </span></b>
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
        
        <input type="date" name="dbo" required >
        
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
      
        <input id='submitemployee' type="submit" name="submit" value="Submit">
       
        
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
<br><br>







        

</body>
</html>

<script >
// //call ajax

// var ajax=new XMLHttpRequest();
// var method="GET";
// var url= "json.php";
// var asynchronous=true;


// ajax.open(method,url,asynchronous);

// //sending request ajax

// ajax.send();

// //receiving response fron the url

// ajax.onreadystatechange=function()
// {
//     if(this.readyState == 4 && this.status ==200){
// alert(this.responseText);

//     }
// }








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

var empname = document.forms['myForm']["name"].value;
    if (empname.length<3){
        seterror("empname", "*Length of name is too short");
        returnval = false;
    }
    
    
    var empemail = document.forms['myForm']["email"].value;
    if (empemail.indexOf('@')<=0){
        seterror("empemail", "*This is not an email address");
        returnval = false;
    }
     
    var empemail = document.forms['myForm']["email"].value;
    if (empemail.charAt(empemail.length-4)!='.'){
        seterror("empemail", "*invalid email address");
        returnval = false;
    }
    
    var empaddress = document.forms['myForm']["add"].value;
    if (empaddress.length < 3){
        seterror("empadd", "*address is not right");
        returnval = false;
    }
    return returnval;
    }


</script>


