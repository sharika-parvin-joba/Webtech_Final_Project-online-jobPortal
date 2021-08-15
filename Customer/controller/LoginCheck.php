<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

    if(!empty($_POST['remember']))
                {
                 
                  $remember=$_POST['remember'];

                  //set cookie

                  setcookie('username',$username,time()+3600);
                  setcookie('password',$password,time()+3600);


    //sql statement

    $sql="SELECT * FROM `registration` WHERE username='$username' && password='$password'";

    //Db_connection
    require_once("../model/conn.php");


    $query=mysqli_query($conn, $sql) or die("Login error");
    $count=mysqli_num_rows($query);

    if($count==1)
    {
      $_SESSION['user']=$username;

     header("location:../view/home.php");
    }
  }

    }

          //   $file=fopen('registers.txt','r');
           

          //   while (!feof($file))//jokhon na file ta shesh hobe loop cholte thakte
          //   {
             
          //     $data=fgets($file);//line by line read korbe
          //   $user=explode(',',$data);
          //   list($name,$email,$username,$password,$confirmpassword,$address,$startingdate)=$user;
           
          //   }
           
          //  fclose($file);
           

               //trim will help us to remove the white spaces
  //              if($username != '' && $password != ''){
               
  //               if(!empty($_POST['remember']))
  //               {
                 
  //                 $remember=$_POST['remember'];

  //                 //set cookie

  //                 setcookie('username',$username,time()+3600);
  //                 setcookie('password',$password,time()+3600);

                

  //               if(trim($user[2]) == $username && trim($user[3])== $password)
  //              {
  //                   setcookie('flag' , 'true', time()+3600 ,'/');
	// 				 header('location: ../view/home.php');

  //               }else{
	// 			echo 'invalid username/password';
	// 		}}else{
  //       echo "NOT checked";
  //     }

	// 	}else{
	// 		echo "null value found...";
	// 	}
	// }else{
	// 	echo "invalid request...";
	// }

?>