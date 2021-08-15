<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forget Password</title>
</head>
<body>

    
    <table>
        <table border="1" height="150" width=500 id='forgetpassword' >
    <tbody>
        <tr>
        <th>
        <form action='../controller/ForgetPasswordCheck.php' method='post' >
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Reset Password</legend> 
        
       <div>
        Enter Email:         <input id='fpemail'type="email" name="email" required><br></div>

        <input id='submitforgetpassword' type="submit" name="submit" value="Submit">
        

    </fieldset>
        </form>
        </th>
        </tr>
        </tbody>
    
    </table>

    


</body>
</html>