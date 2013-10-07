<?php
session_start();

$username=$_SESSION['username'];

$con=mysqli_connect("localhost","harsha","harsha@bits","student");
   
  if(mysqli_connect_errno($con))
     {
          echo "Error connecting database:" .mysqli_connect_error();
     } 

      

    $r="select application,HostOrganisation,status from travelapplicants where username='$username';";
 
 echo    " <!DOCTYPE html>
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
		   <li><a href='proj4.php'>Home</a></li>
		   <li><a href='proj4.php'>Projects</a></li>
		   <li><a href='proj4.php'>Services</a></li>
		   <li><a href='proj4.php'>Downloads</a></li>
		   <li><a href='proj4.php'>About</a></li>
		   <li><a href='proj4.php'>Contact</a></li>
        	   <li><a href='logout.php'>Logout</a></li>
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
               <a href='travelapplicationhtml.php' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTravel Application</a><br><br>
             </td>
             </tr>
              <tr> 
             <td>
              
             <a href='loanapplicationhtml.php' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLoan Application</a><br><br>
             </td> 
             </tr>
             
             <tr>
             <td>
            <a href='checkstatus.php' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCheck Status</a><br><br>
              <tr>
              <td>
               <a href='testimonal.php' class='list-group-item'><i class='icon-chevron-right icon-large'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTestimonal</a><br><br>
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
             
            </div>";

    echo  " <br><br><br><br> <div class=span11>
           <table class='table table-hover'>
            <tr>
            <th>Application No</th>
            <th>HostOrganisation</th>
            <th>Status</th>
            </tr>";
             
    $result=mysqli_query($con,$r);
     if($result)
        {
  while($row=mysqli_fetch_array($result))
         {
          echo "<tr>";
          echo "<td>".$row['application']."</td>";
          echo "<td>".$row['HostOrganisation']."</td>";
          echo "<td>".$row['status']."</td>";
          echo "</tr>";   
         }
       }
 else {

          echo "<tr>;
           <td>no data</td>;
           <td>no data</td>;
           <td>no data</td>;
           </tr>";   
       }
      
                      
echo    "  </div>
          </div>";

echo    "  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	 <script src='js/jquery.validate.js'></script>
         <script src='js/bootstrap.js'></script>
         <script src='js/bootstrap-paginator.js'></script>

        
        
                <body>
               </html>";

 
?>
