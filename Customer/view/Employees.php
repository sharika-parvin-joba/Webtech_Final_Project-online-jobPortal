
 
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "onlinejobportal");
$query = "SELECT * FROM employees ORDER BY name ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }

  .container{
      align:"center";
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <!-- <h2 align="center">How to return JSON Data from PHP Script using Ajax Jquery</h2> -->
   <h3 align="center">Search Employee Data</h3><br />   
   <div class="row">
    <div class="col-md-4">
     <select name="employee_list" id="employee_list" class="form-control">
      <option value="">Select Employee</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
      }
      ?>
     </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="employee_details" style="display:none">
   <table class="table table-bordered">
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td width="90%"><span id="employee_name"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Email</b></td>
     <td width="90%"><span id="employee_email"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Address</b></td>
     <td width="90%"><span id="employee_address"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Gender</b></td>
     <td width="90%"><span id="employee_gender"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Date of birth</b></td>
     <td width="90%"><span id="employee_de"></span></td>
    </tr>
    
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#employee_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#employee_details').css("display", "block");
     $('#employee_name').text(data.name);
     $('#employee_email').text(data.email);
     $('#employee_address').text(data.address);
     $('#employee_gender').text(data.gender);
     $('#employee_de').text(data.d);
     
    }
   })
  }
  else
  {
   alert("Please Select Employee");
   $('#employee_details').css("display", "none");
  }
 });
});
</script>
 
 
 
 
 
 
 
 
 
 
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


<script>
// $(document).ready(function(){

//  load_data();

//  function load_data(query)
//  {
//   $.ajax({
//    url:"fetch.php",
//    method:"POST",
//    data:{query:query},
//    datatype:"JSON",
//    success:function(data)
//    {
//     $('#result').html(data);
//    }
//   });
//  }
//  $('#search_text').keyup(function(){
//   var search = $(this).val();
//   if(search != '')
//   {
//    load_data(search);
//   }
//   else
//   {
//    load_data();
//   }
//  });
// });
</script>

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


