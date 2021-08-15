<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <table >
        <table border="1" height="200" width=500 id='login' >
        <thead align="right">
       <tr>
       <th>
      
       <a href="Home.php"  >Home</a>|
       <a href="Login.php" >Login</a>|
       <a href="Registration.php" >Register</a>
       </th>
       </tr>
       </thead><br>
       
       <tbody>
       <tr>
       <th>
       <form action='../controller/LoginCheck.php' method='post'>
       <fieldset>
       <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Login</legend>
       <div class='login'>
       Username:         <input type="text" name="username" required><br>
      </div>
      <div class='login'>
       Password:         <input type="password" name="password" required><br>
       </div>
       
       
       
       <input type="checkbox" name="remember" checked>Remember me<br>
       <input id='submitlogin'type="submit" name="submit" value="Submit">
       <a href="ForgetPassword.php">Forget Password?</a><br>
       Not yet a member? <a href="Registration.php">Register now</a>
       
       </fieldset>
       
       </form>
       </th>
       </tr>
       </tbody>
       
       <tfoot>
       <tr>
       <th>
       Copyright &copy 2017
       </th>
       </tr>
       </tfoot>
       
       </table>

</body>
</html>