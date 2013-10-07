
<?php
 session_start();
$con = mysqli_connect("localhost","harsha","harsha@bits");

 if(mysqli_connect_errno($con))
    {

    echo "Failed to connect to Mysql:".mysqli_connect_error();
    }

 $db_selected = mysqli_select_db($con,"student");

  if(!$db_selected)
  {
  $mysql = "create database student";
    if(!mysqli_query($con,$mysql))
     {
       echo "Error creating database:".mysql_error()."\n";
     }
    else
     {
       $flag=0;
     }
      
  }
else
 {
   mysqli_close($con);
  $con=mysqli_connect("localhost","harsha","harsha@bits","student");
   
  if(mysqli_connect_errno($con))
     {
          echo "Error connecting database:" .mysqli_connect_error();
     } 
  else
    {
      $query=mysqli_query($con,"select * from applicants");
     if(!$query)
      {  
     $create="create table applicants(username varchar(30),firstname varchar(20) NOT NULL,lastname varchar(20),dob date,university varchar(20),campus varchar(50),discipline varchar(50),id varchar(20),cgpa varchar(5),email varchar(50),passport varchar(30),address varchar(100),permanent varchar(100),contact varchar(20),foreign key(username) references data(username) on delete cascade on update cascade)engine=innodb;";
     mysqli_query($con,$create);
      }
    }
    
 }
      $username =$_SESSION['username'];
      $password =$_SESSION['password'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $dob = $_POST['dob'];
      $university = $_POST['university'];
      $campus = $_POST['campus'];
      $discipline = $_POST['discipline'];
      $id = $_POST['id'];
      $cgpa = $_POST['cgpa'];
      $email = $_POST['email'];
      $passport = $_POST['passport'];
      $address = $_POST['address'];
      $permanent = $_POST['permanent'];
      $contact  = $_POST['contact'];

     $query = mysqli_query($con,"select email from students where username='$username';");

    if(!$query)
    {
    $sql = "insert into applicants values ('$username','$firstname','$lastname','$dob','$university','$campus','$discipline','$id','$cgpa','$email','$passport','$address','$permanent','$contact');";
    mysqli_query($con,$sql);
    echo "successfully submitted\n";
    }
    else
     {
     $sql = "update applicants set firstname='$firstname',lastname='$lastname',dob='$dob',university='$university',campus='$campus',discipline='$discipline',id='$id',cgpa='$cgpa',email='$email',passport='$passport',address='$address',permanent='$permanent',contact='$contact' where username='$username';";
    mysqli_query($con,$sql);
    echo "successfully submitted\n";
     }
   
?>
