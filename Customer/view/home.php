<?php

	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Home page</title>
</head>
<body>
<table border="1" height=500 width=600>
<thead style="text-align: right; font-size: 20px;">
	<tr>
		<th>
<img src="pic1.png"   height=100px width=200px align="left" />
<a href="Employees.php">AddEmployee</a>|
<a href="PostJob.php">PostJob</a>|
<a href="vacancy.php">AddVacancy</a>|
<a href="Logout.php">Logout</a>
</th>
</tr>
</thead>
<tbody style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; background-color: rgb(142, 187, 218);">
	<tr>
		<th>
	<h1>Welcome home! <?php echo $_SESSION['user']['username']; ?> </h1>
</th>
</tr>
</tbody>
<tfoot><tr><th>copyright &copy 2020</th></tr></tfoot>
	<!-- <h1>Welcome home! <?php echo $_SESSION['user']['username']; ?> </h1> -->
	<!-- <a href="Logout.php">Logout</a> -->

</table>	
</body>
</html>

<?php
	
	}else{
		//header('location: ../view/Login.php');
	}
?>

