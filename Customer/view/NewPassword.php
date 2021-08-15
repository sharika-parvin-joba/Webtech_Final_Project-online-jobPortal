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
    </style>
    <title>New Password</title>
</head>
<body>
    

    <table>
        <table border="1" height="150" width=500 id='newpassword'>
    <tbody>
        <tr>
        <th>
        <form action='../controller/NewPasswordCheck.php' method='post' name="myForm" onsubmit="return validateForm()">
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Enter New Password</legend> 
        
         
        <div class='newpassword' id='op'>
        Enter Current Password:         <input type="password" name="password" required><b><span class='formerror'> </span></b>
        </div>
        <div class='newpassword' id='np'>
        Enter New Password:         <input type="password" name="newpassword" required><b><span class='formerror'> </span></b>
        </div>
        <div class='newpassword' id='cp'>
        Confirm Password:         <input type="password" name="confirmpassword" required><b><span class='formerror'> </span></b>
        </div>
    
        

        <input id='submitnewpassword'type="submit" name="submit" value="Change Password">
        

    </fieldset>
        </form>
        </th>
        </tr>
        </tbody>
    

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

var password = document.forms['myForm']["password"].value;
    if (password.length < 6){
    
         seterror("op", "*Password should be atleast 6 characters long!");
        returnval = false;
    }

var npassword = document.forms['myForm']["newpassword"].value;
    if (npassword.length < 6){
    
         seterror("np", "*Password should be atleast 6 characters long!");
        returnval = false;
    }
    
    var cpassword = document.forms['myForm']["confirmpassword"].value;
    if (cpassword != npassword){
        seterror("np", "*Password and Confirm password should match!");
        returnval = false;
    }
    return returnval;
    }


</script>