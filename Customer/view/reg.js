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