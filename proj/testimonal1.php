<?php
 session_start();

$username=$_SESSION['username'];
$password=$_SESSION['password'];
$con=mysqli_connect("localhost","harsha","harsha@bits","student");
   
  if(mysqli_connect_errno($con))
     {
          echo "Error connecting database:" .mysqli_connect_error();
     } 
  else
    {
      $query=mysqli_query($con,"select * from testimonal");
     if(!$query)
      {  
     $create="create table testimonal(username varchar(30),testimonal varchar(1000),foreign key(username) references data(username) on delete cascade on update cascade)engine=innodb;";
     mysqli_query($con,$create);
      }
    }
 $testimonal = $_POST['testimonal'];
  $sql = "insert into testimonal values('$username','$testimonal');";
  
    if(!mysqli_query($con,$sql))
         {
          echo mysqli_error($con);
         }

   header('Location:proj4.php');

?>

