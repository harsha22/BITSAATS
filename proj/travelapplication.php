<?php

   session_start();
  
$con=mysqli_connect("localhost","harsha","harsha@bits","student");
   
  if(mysqli_connect_errno($con))
     {
          echo "Error connecting database:" .mysqli_connect_error();
     } 
  else
    {
      $query=mysqli_query($con,"select * from travelapplicants");
     if(!$query)
      {  
     $create="create table travelapplicants(application int NOT NULL AUTO_INCREMENT primary key,username varchar(30),EventDescription varchar(500) NOT NULL,HostOrganisation varchar(100),Address varchar(100),City varchar(50),Country varchar(50),ContactNo varchar(20),EventUrl varchar(100),DateOfJourney date,JourneyFrom varchar(30),DateOfReturn date,ReturnFrom varchar(30),VisaStatus varchar(20),StateOfTravel varchar(2000),RelevantExperience varchar(500),FacultyName char(30),FacultyOrganisation varchar(50),FacultyDesignation varchar(30),FacultyContact varchar(20),FacultyEmail varchar(30),AbstractResearchPaper varchar(1000),EOCDepFrom varchar(20),EOCTo varchar(20),Cost int,EOCAcDays int,EOCAcCost int,EOCFoodDays int,EOCFoodCost int,LocalCost int,Other varchar(20),OtherCost int,TotalReq int,status varchar(20),foreign key(username) references data(username) on delete cascade on update cascade)engine=innodb;";
     mysqli_query($con,$create);
      }
     $query2=mysqli_query($con,"select * from travelreceit");
    
      if(!$query2)
      {
        $create2="create table travelreceit(username varchar(30),schpsponsor varchar(20),amountapplied int,status varchar(20),foreign key(username) references data(username) on delete cascade on update cascade)engine=innodb;";
        mysqli_query($con,$create2);
      }
    }
    
 
      $username =$_SESSION['username'];
      $password =$_SESSION['password'];
    
      $eventdes =$_POST['eventdes'];
      $host     =$_POST['host'];
      $address  =$_POST['address'];
      $city     =$_POST['city'];
      $country  =$_POST['country'];
      $contact  =$_POST['contact'];
      $eventurl =$_POST['event'];
      
  //    $eventschedule  =$_POST[''];
      $dateofjourney  =$_POST['dateonward'];
      $journeyfrom    =$_POST['from'];
      $dateofreturn   =$_POST['datereturn'];
      $returnfrom     =$_POST['returnfrom'];
      $visastatus     =$_POST['visa'];
      $stateoftravel  =$_POST['travelstatement'];
      $relevantexp    =$_POST['relevantexp'];
      $fname          =$_POST['name'];
      $forganisation  =$_POST['organisation'];
      $fdesig         =$_POST['designation'];
      $fcontact       =$_POST['fcontact'];
      $femail         =$_POST['email'];
      $researchpaper  =$_POST['research'];
      $eocdep         =$_POST['dfrom'];
      $eocto          =$_POST['arrival'];
      $cost           =$_POST['cost1'];
      
      $EocAcDays       =$_POST['accom'];
      $EocAcCost       =$_POST['avgcost'];
      $EocFood         =$_POST['food'];
      $EocFoodCost     =$_POST['avgcostfood'];
      $LocalCost       =$_POST['cost4']; 
      $other           =$_POST['otherexp'];
      $othercost       =$_POST['cost5'];
      $totalreq        =$_POST['totalreq'];


  //for other table
      $schsp          =$_POST['schsp'];
      $amountraised   =$_POST['amountraised'];
      $status         =$_POST['status'];     
      $appstatus      = 'Submitted';

    if($schsp)
       {
         $sql="insert into travelreceit values('$username','$schsp',$amountraised,'$status');";
         mysqli_query($con,$sql);
       }
    /* 
       $mysql=  "insert into travelapplicants(username,EventDescription,HostOrganisation,Address,City,Country,ContactNo,EventUrl,DateOfJourney,JourneyFrom,DateOfReturn,ReturnFrom,VisaStatus,StateOfTravel,RelevantExperience,FacultyName,FacultyOrganisation,FacultyDesignation,FacultyContact,FacultyEmail,AbstractResearchPaper,EOCDepFrom,EOCTo,Cost,EOCAcDays,EOCAcCost,EOCFoodDays,EOCFoodCost,LocalCost,Other,OtherCost,TotalReq)  values('$username','$eventdes','$host','$address','$city','$country','$contact','$eventurl','$dateofjourney','$journeyfrom','$dateofreturn','$returnfrom','$visastatus','$stateoftravel','$relevantexp','$fname','$forganisation','$fdesig','$fcontact','$femail','$researchpaper','$eocdep','$eocto',$cost,$EocAcDays,$EocAcCost,$EocFood,$EocFoodCost,$LocalCost,'$other',$othercost,$totalreq);"; 
      */
      $mysql = "insert into travelapplicants(username,EventDescription,HostOrganisation,Address,City,Country,ContactNo,EventUrl,DateOfJourney,JourneyFrom,DateOfReturn,ReturnFrom,VisaStatus,StateOfTravel,RelevantExperience,FacultyName,FacultyOrganisation,FacultyDesignation,FacultyContact,FacultyEmail,AbstractResearchPaper,EOCDepFrom,EOCTo,Cost,EOCAcDays,EOCAcCost,EOCFoodDays,EOCFoodCost,LocalCost,Other,OtherCost,TotalReq,status) values('$username','$eventdes','$host','$address','$city','$country','$contact','$eventurl','$dateofjourney','$journeyfrom','$dateofreturn','$returnfrom','$visastatus','$stateoftravel','$relevantexp','$fname','$forganisation','$fdesig','$fcontact','$femail','$researchpaper','$eocdep','$eocto',$cost,$EocAcDays,$EocAcCost,$EocFood,$EocFoodCost,$LocalCost,'$other',$othercost,$totalreq,'$appstatus');"; 
   
   if(mysqli_query($con,$mysql))
         {
           echo "successfully submitted";
         }
      else
        echo mysqli_error($con);
      

   header('Location:proj4.php');
?> 
