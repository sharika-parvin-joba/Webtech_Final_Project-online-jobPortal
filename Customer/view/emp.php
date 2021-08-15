
<script>
//call ajax

var ajax=new XMLHttpRequest();
var method="GET";
var url= "json.php";
var asynchronous=true;


ajax.open(method,url,asynchronous);

//sending request ajax

ajax.send();

//receiving response fron the url

ajax.onreadystatechange=function()
{
    if(this.readyState == 4 && this.status ==200){
     
     //converting json back to array

     var data=JSON.parse(this.responseText);
     sonsole.log(data);

    }
}

</script>





<?php

// // $mysqli=new mysqli('localhost','root','','onlinejobportal') or die(mysqli_error($mysqli));
//  require_once('../model/conn.php');
// $result=$conn->query("SELECT * FROM employees") or die('error');

 ?>



<!-- <div class='hi'>

<table class='table'>

<thead>

<tr>

<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>Date Of Birth</th>
<th colspan="2">Action</th>


</tr>

</thead> -->


<?php

//while($row = $result->fetch_assoc()):

?>

<!-- <tr>
    <td> <?php //echo $row['name']; ?> </td>
    <td> <?php //echo $row['email']; ?></td>
    <td> <?php //echo $row['address']; ?></td>
    <td> <?php //echo $row['gender']; ?></td>
    <td> <?php //echo $row['date of birth']; ?></td>
    <td>
       
    <a href="Employees.php?edit=<?php //echo $row['id']; ?>">Edit</a>
    <a href="EmployeeCheck.php?delete=<?php //echo $row['id']; ?>">Delete</a>


    </td>


</tr> -->

<?php

//endwhile;

?>

<!-- </table>

</div> -->



<?php

// function pre_r($array){

//     echo '<pre>';
//     print_r($array);
//     echo "</pre>";

// }

?>