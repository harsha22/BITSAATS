<?php 
  session_start();


echo "<!DOCTYPE HTML>
<html>
	<head>	
        <meta charset='utf-8'>
	<title>BITSAA</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' href='font-awesome/css/font-awesome.css'>
        <link rel='stylesheet' type='text/css' href='datepicker/css/datepicker.css'>
	 
        </head>

	<body>
            <div class=''container''><br>
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
             
           </div>   

           <div class='span11'><br><br><br><br>
             <table class='table table-striped'><tr><td>
                <form class='form-horizontal' role='form' id='form' method='post' action='travelapplication.php'>
                    
                      <div class='row'>
                       
                        <div class='span11'>
                        <label for='eventdes'><b>Event Description:</b></label>
                        <textarea type='text' class='input-xxlarge' rows='6' id='eventdes' name='eventdes' placeholder='Describe your event' ></textarea>
                        </div>      
                      </div>

                      <div class='row'><br><br>
                         <div class='span8'> 
                        <b>Host Organisation:&nbsp</b><br><input type='text' name='host' class='input-xlarge' id='host' placeholder='host'>
                         </div> 
                      </div>

                       <div class='row'><br>
                          <div class='span8'> 
                          <b>Address:&nbsp&nbsp<br></b>
                          <textarea type='text'  class='input-xlarge' id='address' name='address' placeholder='Address' ></textarea>
                         </div>
                       </div>

                      <div class='row'><br>
                          <div class='span5'> 
                          <b>City:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='city' name='city' placeholder='City' >
                          </div>
                          <div class='span5'> 
                          <b>Country:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='country' name='country' placeholder='Country' >
                         </div>
                      </div>
                      
                      <div class='row'><br>
                          <div class='span5'> 
                          <b>Contact No:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='contact' name='contact' placeholder='Mobile-No' >
                          </div>
                          <div class='span5'> 
                          <b>Event URL:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='event' name='event' placeholder='url' >
                         </div>
                      </div>
 
                     <div class='row'><br>
                          <div class='span5'>
                            <div id='change-date'>    
                              <b>Date Of Onward Journey:&nbsp</b>
                                <div class='input-append datepicker date' id='dp3' data-date='2013-09-25' data-date-format='yyyy-mm-dd'> 
                                <input size='16' type='text' class='date' name='dateonward' id='date'>
                                <span class='add-on' rel='tooltip' title='choose date'><i class='icon-calendar'></i></span>    
                                </div>
                            </div>
                          </div> 
                          <div class='span5'>
                           <b>From:</b><br><input type=text class='input-large' name='from' id='from' placeholder='from' >
                          </div>
                    </div>
                    
                    <div class='row'><br>
                          <div class='span5'>
                            <div id='change-date'>    
                              <b>Date Of Return Journey:&nbsp</b>
                                <div class='input-append datepicker date' id='dp3' data-date='2013-09-25' data-date-format='yyyy-mm-dd'> 
                                <input size='16' type='text' class='date' name='datereturn' id='date'>
                                <span class='add-on' rel='tooltip' title='choose date'><i class='icon-calendar'></i></span>    
                                </div>
                            </div>
                          </div> 
                          <div class='span5'>
                           <b>From:</b><br><input type=text class='input-large' name='returnfrom' id='from' placeholder='from' >
                          </div>
                    </div>
                    
                   <div class='row'><br><br>
                         <div class='span8'> 
                        <b>Visa Status:&nbsp</b><br><input type='text' name='visa' class='input-xlarge' id='visa' placeholder='Visa'>
                         </div> 
                   </div>
 
                   <div class='row'><br>
                       
                        <div class='span11'>
                        <label for='travelstatement'><b>Statement Of Travel:</b></label>
                        <textarea type='text'  class='input-xxlarge' name='travelstatement' rows='15' id='travelstatement' placeholder='Explain the goals you hope to achieve and how the travel will enhance your academic and personal development.' ></textarea>
                        </div>
                   </div>
                   
                    <div class='row'><br>
                       
                        <div class='span11'>
                        <label for='relevantexperience'><b>Relevant Experience:</b></label>
                        <textarea type='text'  class='input-xxlarge'  rows='5' name='relevantexp' id='relevantexperience' placeholder='Relevant experience / past achievements or awards that support your application:.' ></textarea>
                        </div>      
                   </div>

                   <h4>Any faculty member/alumni/industry expert who would vouch for this event and your participation:</h4>
        
                   <table class='table table-bordered'> 
                   <tr><td>
                  <div class='row'><br>
                         <div class='span8'> 
                        <b>Name:&nbsp</b><br><input type='text' name='name' class='input-xlarge' id='name' placeholder='Faculty Name'>
                         </div> 
                   </div>
        
                   <div class='row'><br>
                          <div class='span5'> 
                          <b>Designation:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='designation' name='designation' placeholder='Designation' >
                          </div>
                          <div class='span5'> 
                          <b>Organisation:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='organisation' name='organisation' placeholder='Organisation' >
                          </div>
                   </div>

                   <div class='row'><br>
                          <div class='span5'> 
                          <b>Contact No:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='fcontact' name='fcontact' placeholder='Mobile-No' >
                          </div>
                          <div class='span5'> 
                          <b>E-Mail:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-xlarge' id='email' name='email' placeholder='Email' >
                          </div>
                   </div>
                       </td></tr></table> 
                  <h5>In case of a research publication that has been selected for the conference, provide the abstract of the paper in the space below:</h5>
                   <div class='row'><br>
                        
                        <div class='span11'>
                        <label for='researchpublication'><b>Publication:</b></label>
                        <textarea type='text'  class='input-xxlarge' name='research' rows='18' id='researchpublication' placeholder='ResearchPublication'></textarea>
                         </div> 
                   </div>
                   
                  <h4>Estimate Of Costs:</h4>
                  <table class='table table-bordered'>
                  <tr><td>
                    <div class='row'><br>
                          <div class='span4'> 
                          <b>Roundtrip Air/Trainfare Departure from:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='dfrom' name='dfrom' placeholder='DepartureFrom' >
                          </div>
                          <div class='span4'> 
                          <b>IntialArrivalPoint:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='arrival' name='arrival' placeholder='arrival' >
                          </div>
                          <b>Cost:</b><br>
                          <input type='text' class='input-small' id='cost1' name='cost1' placeholder='Cost'>
                          
                   </div> 

                   <div class='row'><br>
                          <div class='span4'> 
                          <b>Accomodation:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='accom' name='accom' placeholder='No.of Days' >
                          </div>
                          <div class='span4'> 
                          <b>Average cost per day:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='avgcost' name='avgcost' placeholder='cost' >
                          </div>
                          <b>Cost:</b><br>
                          <input type='text' class='input-small' id='cost2' name='cost2' placeholder='Cost'>
                          
                   </div> 

                  <div class='row'><br>
                          <div class='span4'> 
                          <b>Food:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='food' name='food' placeholder='No.of Days' >
                          </div>
                          <div class='span4'> 
                          <b>Average cost per day:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='avgcostfood' name='avgcostfood' placeholder='cost' >
                          </div>
                          <b>Cost:</b><br>
                          <input type='text' class='input-small' id='cost3' name='cost3' placeholder='Cost'>
                          
                   </div> 

                   <div class='row'><br>
                          <div class='span8'> 
                          <b>Local Transportation Costs:&nbsp&nbsp<br></b>
                          
                          </div>
                          <input type='text' class='input-small' id='cost4' name='cost4' placeholder='Cost'>
                          
                   </div> 
                 
                   <div class='row'><br>
                          <div class='span8'> 
                          <b>Other Expenses:&nbsp&nbsp<br></b>
                           <input type='text' class='input-large' id='otherexp' name='otherexp' placeholder='other' >
                          </div>
                          <b>Cost:</b><br>
                          <input type='text' class='input-small' id='cost5' name='cost5' placeholder='Cost'>
                          
                   </div> 

                   <div class='row'><br>
                          <div class='span8'> 
                          <b>Total Proposed Budget For the Trip:&nbsp&nbsp<br></b>
                          
                          </div>
                          <input type='text' class='input-small' id='totalexp' name='totalexp' placeholder='Cost'>
                          
                   </div> 
    
                   <div class='row'><br>
                          <div class='span8'> 
                          <b>Total Funds Requested from BITSAA:&nbsp&nbsp<br></b>
                          
                          </div>
                          <input type='text' class='input-small' id='totalreq' name='totalreq' placeholder='Cost'>
                          
                   </div> 
                    <h5>BITSAA usually supports upto 37.5% of the travel expenses. If the applicant is from Pilani campus, another 37.5% (not exceeding Rs. 20,000) is covered by BITS Pilani.<h5>
                  </tr></td>             
                  </table> 
     
                  <h5>At the time of travel,If you are in receit of any other Scholarship then please provide details</h5>
                    <table class='table table-bordered'>
                    <tr><td>
                      <div class='row'><br>
                          <div class='span4'> 
                          <b>Scholarship/Sponsor:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='schsp' name='schsp' placeholder='Scholarship' >
                          </div>
                          <div class='span4'> 
                          <b>Amount Raised/Applied For:&nbsp&nbsp<br></b>
                          <input type='text'  class='input-large' id='amountraised' name='amountraised' placeholder='Amount' >
                          </div>
                          <b>Current Status:</b><br>
                          <input type='text' class='input-small' id='status' name='status' placeholder='Status'>
                          
                   </div> 
                    </td></tr>
                    </table>
                    
                    <h4>Declaration And Consent:</h4><br>
                    <table class='table table-bordered'>
                     <tr><td>
                        <h5> 
                          I understand that if I cancel or terminate any planned travel, I am responsible for payment of all fees for which I am obligated without reimbursement from BITSAA Travel Scholarships, unless agreed to by the Selection Committee. I understand that I will be expected to complete my travel plans in substantially the same way as proposed or to make a full or partial refund of funds granted at the discretion of the Selection Committee.<br><br>
I agree to submit a scanned copy of the relevant travel receipts and a written report within 2 weeks after the completion of my travel, describing my trip, reflecting on the accomplishment of the goals stated in my proposal, and assessing the effect of my travel on my academic and personal development. I am aware that parts of this report may be maintained for access by members of the BITSAA community, including students who may be applying for the BITSAA Travel Scholarships in the future.  I agree that excerpts from my report, with proper attribution where appropriate, may be published by BITSAA for the purpose of promotion of the Travel Scholarship program.<br><br>
I declare that the information supplied by me on this form is complete and correct in every particular. I understand that BITSAA reserves the right to vary or reverse any decision made on the basis of incomplete or incorrect information.</h5><br><br>
                        <input type='checkbox'>  I agree to the terms and conditions.     
                     </td></tr>
                    </table> 
                   
                    <h4>Scholarship Guidelines:</h4><br>
                    <table class='table table-bordered'>
                     <tr><td>
                      <ul>
                      <li><h5>Only students who are currently pursuing their degree in one of the BITS campuses are eligible to apply for the BITSAA travel scholarships. The travel period should necessarily lie in between the period of his/her study at BITS. 
</h5></li> 
                       <li><h5>The BITSAA Travel Scholarships aims to provide assistance only for the travel expenses associated with the event. This does not include registration costs, medical insurance or any other expense incurred during the trip. The Selection Committee might provide additional financial assistance if the situation demands it.

                      </h5></li> 
                       <li><h5>The maximum financial assistance provided by the BITSAA Travel Sponsorship Program would be 37.5% of the total travel expenses incurred by the recipient. If the applicant is from BITS Pilani, another 37.5% of the expenses (not exceeding Rs. 20,000) would be borne by the Institute and the rest has to be raised by him/her from other sources.  
                       </h5></li> 
                       
                       <li><h5>
                         In the case of the recipient finding other sources to fund his/her travel, he/she must provide details about them, and the failure to do so may result in the cancellation of the scholarship.

                       </h5></li>  
                       
                        <li><h5>
                            Applications are accepted year round, but must be received by the Selection Committee as early as possible and ideally, 60 days prior to the beginning of the travel. 

                       </h5></li>  
                        <li><h5>
                            The recipient of the award should submit scanned copy of all the travel receipts and a detailed report of his trip to the Selection Committee within 2 weeks from the day of return, failing which BITSAA has the right to withhold part/whole of the scholarship award.
                      </h5></li>  
                      
                      
                       </ul>       
                     </td></tr>
                   </table>     
                   
                  <input type='submit' name='submit' class='btn btn-primary ' value='Submit'>        
                </form>
             </td></tr></table>
           </div>              


         <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	 <script src='js/jquery.validate.js'></script>
         <script src='js/bootstrap.js'></script>
         <script src='js/bootstrap-paginator.js'></script>
         <script src='datepicker/js/bootstrap-datepicker.js'></script>
          <script>
          $(document).ready(function() {
        $('.datepicker').datepicker()
        $('#dp3').on('changeDate', function() {
            var date = $('#date').val();
           $('#change-date').submit();
        });
    });
        </script>

        
        
    <body>
</html>";

?>
