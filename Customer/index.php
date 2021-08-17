<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="indexstyle.css"> -->

    <style>

*{
	padding: 0;
	margin: 0;
}
.wrapper{
	 background: url('./view/img.jpg') no-repeat;
	background-size: cover; 
	 height: 800px; 
     weight:100%;
   
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: #999999;
}
/* .navbar .logo{
	width: 140px;
	height: auto;
	padding: 20px 100px;
} */
.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: #d9d9d9;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
   
}
.center h1{
	color: white;
	font-size: 60px;
	width: 880px;
	font-weight: bold;
	/* text-align: center; */
   padding:0px 0px 10px 0px;
    margin-right:160px;
}
.center h2{
	color: white;
	font-size: 50px;
	font-weight: bold;
	margin-top: 10px;
	width: 885px;
    font-family:'Dancing Script', cursive;
	/* text-align: center; */

}
.center {
	margin: 35px 280px;
}


        </style>
    <title>Document</title>
</head>
<body  >
<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="">
				<ul>
					<li><a class="active" href="view/home.php">Home</a></li>
					<li><a href="view/login.php">Login</a></li>
					<li><a href="view/Registration.php">Registration</a></li>
					<li><a href="view/contact.html">Contact</a></li>
					
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To Online Job Portal</h1>
			<h2>Looking for Jobs???</h2>
			
		</div>
		</div>

   
		
	
   
    
</body>
</html>