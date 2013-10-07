<?php

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
      $query=mysqli_query($con,"select * from data");
     if(!$query)
      {  
     $create="create table data(username varchar(30) primary key,password varchar(50) NOT NULL,flag char(30))engine=innodb;";
     mysqli_query($con,$create);
      }
    }
    
 }
 
$username=$_POST['username'];
$password=$_POST['password'];

$result = mysqli_query($con,"select password from data where username='$username'");

 $info = mysqli_fetch_array($result);
 $pass = $info['password'];

 $d= mysqli_query($con,"select * from applicants where username='$username'");
 
  $data = mysqli_fetch_array($d);
   
 if($data)
  {
      $firstname = $data['firstname'];
      $lastname = $data['lastname'];
      $dob = $data['dob'];
      $university = $data['university'];
      $campus = $data['campus'];
      $discipline = $data['discipline'];
      $id = $data['id'];
      $cgpa = $data['cgpa'];
      $email = $data['email'];
      $passport = $data['passport'];
      $address = $data['address'];
      $permanent = $data['permanent'];
      $contact = $data['contact'];

  } 
else
  {
 
      $firstname = 'FirstName';
      $lastname = 'Lastname';
      $dob = 'dd-mm-yy';
      $university = 'University';
      $campus = 'Campus';
      $discipline = 'Discipline';
      $id = 'ID';
      $cgpa = 'CGPA';
      $email = 'E-Mail';
      $passport = 'Passport-No';
      $address = 'Address';
      $permanent = 'Address';
      $contact = 'Contact';
  }
 if($_POST['sign'] && ($pass==$password))
   {
     echo "<!DOCTYPE HTML>
         <html>
	 <head>	
    <meta charset='utf-8'>
	<title>BITSAA</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' href='font-awesome/css/font-awesome.css'>
	 
        </head>

	<body>
            <div class=''container''>
     <h1> <a href='http://www.bitsaa.org'>BITSAA Travel Scholarships and Loan portal</a></h1>
	     <div class='navbar'>
		<div class='navbar-inner'>
			<div class='container'>
		    <ul class='nav'>
		   <li><a href='#'>Home</a></li>
		   <li><a href='#'>Projects</a></li>
		   <li><a href='#'>Services</a></li>
		   <li><a href='#'>Downloads</a></li>
		   <li><a href='#'>About</a></li>
		   <li><a href='#'>Contact</a></li>
        	   </ul>
          </div>
         </div>
         </div>
         <div class='row'>
          <div class='span3'>
            <table class='table table-hover'>
            <div class='list-group'>
             <tr>
             <td>
               <a href='#' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTravel Application</a><br><br>
             </td>
             </tr>
              <tr> 
             <td>
              
             <a href='#' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLoan Application</a><br><br>
             </td> 
             </tr>
             
             <tr>
             <td>
            <a href='#' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCheck Status</a><br><br>
              <tr>
              <td>
               <a href='#' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTestimonal</a><br><br>
              </td> 
              </tr>
              <tr><td>
             
              </td></tr>
              <br><br><br><br>
            </div>
            </table>
              <i>&nbsp&nbsp&nbsp&nbsp</i><i class='icon-thumbs-up icon-3x'></i><br><br>
           
              <i>&nbsp&nbsp&nbsp&nbsp</i><i class='icon-twitter icon-3x'></i><br><br>
               <i>&nbsp&nbsp&nbsp&nbsp</i><i class='icon-google-plus-sign icon-3x'></i><br><br>
                <i>&nbsp&nbsp&nbsp&nbsp</i><i class='icon-linkedin icon-3x'></i>
             
           </div>   
         <div class='span11'><br><br><br><br>
          <table class='table table-striped'><tr><td>
            <form class='form-horizontal' role='form' id='form' method='post' action='applicants.php'>
                 
                 <div class='row'>
                         <div class='span5'>
                            
                  <b>FirstName:&nbsp&nbsp&nbsp&nbsp</b><input type='text'  class='form-control' name='firstname' id='firstname' placeholder='$firstname'>      
                        </div>
                        <div class='span5'>
                              <div class='control-group'>       
            <label class='control-label' for='lastname'><b>LastName:&nbsp&nbsp</b></label> 
                               <div class='controls'>             
            <input type='text' class='form-control' name='lastname' id='lastname'  placeholder='$lastname'><br><br>
                               </div>
                              </div> 
                        </div>
                  </div>
                      
                 
                <div class='row'>
                    <div class='span1'>
                    </div>
                    <div class='span12'>
                   <b>DateOfBirth:&nbsp</b><input type='text' name='dob' id='date' placeholder='$dob'>
                    </div> 
               </div>
               <div class='row'><br> 
                    <div class='span1'>
                    </div>
                    <div class='span12'>
                     <b>University:&nbsp&nbsp&nbsp&nbsp</b><input type='text' class='input-3large'  name='university' id='university' placeholder='$university'>
                    </div>
               </div>
               <div class='row'><br>
                     <div class='span12'>
                  <b>Campus:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
                  <input type='text' class='input-xxlarge' name='campus' id='campus' placeholder='$campus' >
                     </div>
               </div>      
                <div class='row'><br>
                       <div class='span5'>
                  <b>Discipline:&nbsp&nbsp&nbsp</b>
                  <input type='text' class='input-large' name='discipline' id='discipline'  placeholder='$discipline' >
                       </div>
                       <div class='span4'>
                       ID:<input type='text' id='id'  placeholder='$id'> 
                       </div>
                       <div class='span3'>
                  <b>CGPA:&nbsp</b></a><input type='text' class='input-small' name='cgpa' id='cg'  placeholder='$cgpa'>   
                       </div>
               </div>
                <div class='row'><br>
                     <div class='span12'>
                  <b>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
                  <input type='text' class='input-xlarge' id='email' name='email'  placeholder='$email' >
                     </div>
               </div>
               <div class='row'><br>
                     <div class='span12'>
                  <b>PassportNo:</b>
                  <input type='text' class='input-xlarge' name='passport' id='passport'  placeholder='$passport' >
                     </div>
               </div>      
               <div class='row'><br>
                          <div class='span6'>
                  <b>Address:&nbsp&nbsp<br></b>
                  <textarea type='text'  class='input-xlarge' name='address' id='address'  placeholder='$address' ></textarea>
                          </div>
                          <div class='span5'>
                  <b>Permanent Address:&nbsp&nbsp<br></b>
                  <textarea type='text'  class='input-xlarge' name='permanent' id='paddress'  placeholder='$permanent' ></textarea>
                          </div>
               </div>      
               <div class='row'><br>
                     <div class='span12'>
                  <b>ContactNo:&nbsp</b>
                  <input type='text' class='input-large' name='contact' id='contact' placeholder='$contact' >
                     </div>
               </div> 
              <div class='row'><br><br>
                     <div class='span1'>
                     </div> 
                     <div class='span2'>
               <input type='submit' class='btn btn-primary btn-block' value='Submit'>
                     </div>
              </div>
               <input type='hidden' name='username' value='$username'>
               <input type='hidden' name='password' value='$password'>  
           </form>
           <form method='post' action='applicant2.php'>
             <div class='row'> 
               <div class='span1'>
                </div>
               <div class='span2'>   
               <button type='submit' class='btn btn-primary btn-block' name='edit'>Edit</button>
               </div>  
             </div>
           </form>
             </td></tr></table> 
        </div>
        </div>
         <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	 <script src='js/jquery.validate.js'></script>
         <script src='js/bootstrap.js'></script>
         <script src='js/bootstrap-paginator.js'></script>
          <script >
          $(document).ready(function(){
        $('.datepicker').datepicker()
        $('#dp3').on('changeDate', function() {
            var date = $('#date').val();
           $('#change-date').submit();
        });
       });
        </script> 
         <body>
         </html>";
    
 
   }
 else
  echo "password is incorrect\n";
 ?>
