


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

#r{
    background-image:url('images.jpg');
    background-repeat:no-repeat;
    /* //background-position:center; */
    
    background-size:cover;
}


    </style>
    <title>  Registration</title>
</head>
<body id='r'>
    
   
        <table >
        <table  border='4' height="400" width=800 id='registration'>
         <thead align="right">
        <tr>
        <th>
      
        <a href="Home.php"  >Home</a>|
        <a href="Login.php" >Login</a>|
        <a href="Registration.php" >Register</a>
        </th>
        </tr>
        </thead><br>
        
        <tbody align='center'>
        <tr>
        <th>
        <form action='../controller/RegistrationCheck.php' method='post' name="myForm" onsubmit="return validateForm()">
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Registration</legend>
        <div class='registration' id='regname'>
         Name:             <input type="text" name="name" required><b><span class='formerror'> </span></b>
        </div >
        <div class='registration' id='regemail'>
        Email:            <input type="email" name="email" required><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regusername'>
        Username:         <input type="text" name="username" required><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regpassword'>
        Password:         <input type="password" name="password" required><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regconfirmpassword'>
        Confirm Password: <input type="password" name="confirmpassword" required><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' id='regaddress'>
        Address:          <input type="text" name="add" required><b><span class='formerror'> </span></b>
        </div>
        <div class='registration' >
        
            
        <fieldset align="left" >
        <legend >Date of submitting</legend>
        
        <input type="date" name="dos" required>
        </div>
        
        </fieldset><br>
        
        <input id='submitregistration' type="submit" name="submit" value="Submit"><br>
        
        Already a member?<a href="Login.php">Login now</a>
        
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

//perform validation and if validation fails, set the value of returnval to false
var name = document.forms['myForm']["name"].value;
if (name.length<5){
    seterror("regname", "*Length of name is too short");
    returnval = false;
}


var email = document.forms['myForm']["email"].value;
if (email.indexOf('@')<=0){
    seterror("regemail", "*This is not an email address");
    returnval = false;
}
 

if (email.charAt(email.length-4)!='.'){
    seterror("regemail", "*invalid email address");
    returnval = false;
}


var username = document.forms['myForm']["username"].value;
if (username.length < 2){
    seterror("regusername", "*username is not valid");
    returnval = false;
}

var password = document.forms['myForm']["password"].value;
if (password.length < 5){

     seterror("regpassword", "*Password should be atleast 6 characters long!");
    returnval = false;
}

var cpassword = document.forms['myForm']["confirmpassword"].value;
if (cpassword != password){
    seterror("regconfirmpassword", "*Password and Confirm password should match!");
    returnval = false;
}

var address = document.forms['myForm']["add"].value;
if (address.length < 3){
    seterror("regaddress", "*address is not right");
    returnval = false;
}


return returnval;
}


</script>