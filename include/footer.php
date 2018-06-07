<?php
if(isset($_REQUEST['enq_btn'])){
$to      = 'staff@stronglh.co.nz';
$subject = 'Enquiry Query';
$message = "Hi Administrator,". "\r\n\r\n" 
        . "First Name: ".$_REQUEST['enqfirstname']."". "\r\n" 
        . "Last Name: ".$_REQUEST['enqlastname']."". "\r\n" 
        . "Company: ".$_REQUEST['enqcompany']."". "\r\n" 
        . "Phone: ".$_REQUEST['enqphone']."". "\r\n" 
        . "Email: ".$_REQUEST['enqemail']."". "\r\n" 
        . "General Enquiry: ".$_REQUEST['enqgeneral']."". "\r\n" 
        . "Description Of Work: ".$_REQUEST['enqdesc']."". "\r\n" 
        . "Job Site Name: ".$_REQUEST['enqsitename']."". "\r\n" 
        . "Job Site Address: ".$_REQUEST['enqsiteaddress']."". "\r\n" 
        . "Job Start Date: ".$_REQUEST['enqsitestartdate']."". "\r\n" 
        . "Job Finish Date: ".$_REQUEST['enqsitefinishdate']."". "\r\n" 
        . "Job Start Time: ".$_REQUEST['enqsitestarttime']."". "\r\n" 
        . "Job Finish Time: ".$_REQUEST['enqsitefinishtime']."". "\r\n" 
        . "Site Safe Of Certificates Required: ".$_REQUEST['radio-group']."". "\r\n" 
        . "Special Requirements: ".$_REQUEST['enqspecial']."". "\r\n" 
        . "Required Tools:".$_REQUEST['enqtools']."";
$headers = 'From: '.$_REQUEST['enqemail'].'' . "\r\n" .
    'Reply-To: info@stronglh.co.nz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mailsend = mail($to, $subject, $message, $headers);
if($mailsend){
?>
<script>
	alert("Enquiry Submitted Succesfully!");
	
</script>
<?php	
	}
}
?>

<?php
if(isset($_REQUEST['apply_btn'])){
$to      = 'work@stronglh.co.nz';
$subject = 'Apply Job Query';
$message = "Hi Administrator,". "\r\n\r\n" 
        . "First Name: ".$_REQUEST['applyfirstname']."". "\r\n" 
        . "Last Name: ".$_REQUEST['applylastname']."". "\r\n" 
        . "Company: ".$_REQUEST['applydob']."". "\r\n" 
        . "Phone: ".$_REQUEST['applyphone']."". "\r\n" 
        . "Email: ".$_REQUEST['applyemail']."". "\r\n" 
        . "General Enquiry: ".$_REQUEST['applyhomeaddress']."". "\r\n" 
        . "Description Of Work: ".$_REQUEST['applylicensetype']."". "\r\n" 
        . "Job Site Name: ".$_REQUEST['applylicensenumber']."". "\r\n" 
        . "Job Site Address: ".$_REQUEST['applyexp']."". "\r\n" 
        . "Job Start Date: ".$_REQUEST['applydoa']."". "\r\n" 
        . "Required Tools:".$_REQUEST['applymessage']."";
$headers = 'From: '.$_REQUEST['applyemail'].'' . "\r\n" .
    'Reply-To: info@stronglh.co.nz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mailsend1 = mail($to, $subject, $message, $headers);
if($mailsend1){
?>
<script>
	alert("Apply Job Succesfully!");
</script>
<?php	
	}
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
       <footer>
          <a href="javascript:;"><img src="img/phone.png"/> 021 SLHIRE</a> 
          <a href="tel:021 754 473"><img src="img/phone.png"/> 021 74 4473</a> 
          <a href="javascript:;"><img src="img/pobox.png"/> PO Box 64008, Botany, Auckland 2163</a>
          <a href="mailto:info@stronglh.co.nz"><img src="img/email.png"/> info@stronglh.co.nz</a> 
       </footer>
       
       <div class="HomeMedia">
        <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5">
        <span>
         <a href="https://www.facebook.com/Strong-Labour-Hire-1897789170263201/" target="_blank"><img src="img/fbicon.png" alt="Facebook Icon" style="width:30px;"/></a>
         <a href="https://www.instagram.com/stronglabourhire/" target="_blank"><img src="img/insta.png" alt="Instagram Icon" style="width:30px;"/></a>
        </span>
        </div>
        <div class="col-md-5">
          <div class="PoweredText">
            <span>Powered by AEksha Design.</span>
          </div>
        </div>
       </div>
       
    </div>
  </div>
</div>

<!--------- Model popup detail First ---------->
<div class="modal fade bd-example-modal-lg-first" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content PopupBgFirst">
      <div class="modal-header">
        <!--<h4 class="modal-title" id="myLargeModalLabel" style="width:auto; float:left;">Large modal</h4>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="img/close.png"/></span>
        </button>
      </div>
      <div class="modal-body">
       <div class="PopupEnquire">
           <div class="col-md-6 mediaPadd">
             <div class="InnerEnquireText">
               <p>At Strong Labour Hire we have a great team of hard working reliable labourers available for your projects. Our Labourers can be transported to site at start of shift & are equipped with basic work tools and worker safety equipment</p>
                <p class="width35">Hard hats</p>
                <p class="width35">Safety Footware</p>
                <p class="width35">Hi-Viz clothing</p>
                <p class="width35">Safety glasses</p>
                <p>Please ensure you provide as much information as possible so we can assure that we appoint the right Labourers required for each job.</p>
                
                <h4>GETTING THE JOB DONE</h4>
                
                <img src="img/form.jpg"/>
             </div>
           </div>
           <div class="col-md-6 mediaPadd">
             <div class="InnerForm">
                 <form name="enqfrm" id="enqfrm" method="post">
                  <div class="FullWidth width45 "> <input type="text" name="enqfirstname" id="enqfirstname" placeholder="First Name"/></div>
                  <div class="FullWidth width45 "> <input type="text" name="enqlastname" id="enqlastname" placeholder="Last Name"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqcompany" id="enqcompany" placeholder="Company Name"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqphone" id="enqphone" placeholder="Phone"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqemail" id="enqemail" placeholder="Email"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqgeneral" id="enqgeneral" placeholder="General Enquiry"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqdesc" id="enqdesc" placeholder="Description of work"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqsitename" id="enqsitename" placeholder="Job Site Name"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqsiteaddress" id="enqsiteaddress" placeholder="Job Site Address"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth width45">
                 <!--  <input type="text" name="enqsitestartdate" id="enqsitestartdate" placeholder="Job Start Date"/>-->
                        <div class="datepicker input-group date">
                            <input  type="text" name="enqsitestartdate" id="enqsitestartdate" placeholder="Job Start Date" />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                   </div>
                  <div class="FullWidth width45"> 
                    <div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
                            <input type="text" name="enqsitefinishdate" id="enqsitefinishdate" placeholder="Finish Date" />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                   </div>
                   <div class="clearfix"></div>
                  <div class="FullWidth width45"> 
                   <div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
                            <input  type="text" name="enqsitestarttime" id="enqsitestarttime" placeholder="Job Start Time"/>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                  </div>
                  <div class="FullWidth width45"> 
                    <div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
                            <input  type="text" name="enqsitefinishtime" id="enqsitefinishtime" placeholder="Finish Time"/>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                  </div>
                 <div class="clearfix"></div>
                  <div class="FullWidth">
                    <div class="col-md-7 zero">
                     <small>Site Safe Certificates Required</small>
                    </div>
                    <div class="col-md-5">
                     <div class="radiobttn">
                        <input type="radio" id="test1" name="radio-group" checked>
                        <label  style="top:0px;" for="test1">Yes</label>
                      
                       <input type="radio" id="test2" name="radio-group" checked>
                      <label  style="top:0px;" for="test2">No</label>
                     </div>
                    </div>
                  </div> 
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqspecial" id="enqspecial" placeholder="Special Requirements"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="enqtools" id="enqtools" placeholder="Required Tools"/></div>
                  <div class="clearfix"></div>
                  <button type="submit" name="enq_btn" id="enq_btn">Submit</button>
                </form>
             </div>
           </div>
         </div>
      </div>
    </div>
  </div>
</div>


<!--------- Model popup detail Second ---------->
<div class="modal fade bd-example-modal-lg-second" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content PopupBgFirst">
      <div class="modal-header">
<!--        <h4 class="modal-title" id="myLargeModalLabel" style="width:auto; float:left;">Large modal</h4>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><img src="img/close.png"/></span>
        </button>
      </div>
       <div class="modal-body">
          <div class="PopupEnquire">
           <div class="col-md-6 mediaPadd">
             <div class="InnerEnquireText">
              <strong>Are you....</strong>
               <p>1- Reliable?</p>
               <p>2- Hard working?</p>
               <p>3- Good with time management?</p>
               <p>4- Able to follow instructions?</p>
               <p>5- Good with communication?</p>
               <p>6- Keen to learn new things?</p>
               <p>7- Willing to take on new challenges?</p>
               <p>8- Able to work in a team environment?</p>
               <strong>If you tick all the boxes We want you!</strong>
                <h4>GETTING THE JOB DONE</h4>
                
                <img src="img/form.jpg"/>
             </div>
           </div>
           <div class="col-md-6 mediaPadd">
             <div class="InnerForm" style="background:#ED1C24;">
                 <form id="applyfrm" name="applyfrm" method="post">
                  <div class="FullWidth width45 "> <input type="text" name="applyfirstname" id="applyfirstname" placeholder="First Name"/></div>
                  <div class="FullWidth width45 "> <input type="text" name="applylastname" id="applylastname" placeholder="Last Name"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth">
                    <div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
                            <input type="text" name="applydob" id="applydob" placeholder="DOB"/>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="applyphone" id="applyphone" placeholder="Phone"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="applyemail" id="applyemail" placeholder="Email"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="applyhomeaddress" id="applyhomeaddress" placeholder="Home address"/></div>
                  <div class="clearfix"></div>
                  
                  <div class="FullWidth">
                    <div class="col-md-7 zero">
                     <small>Do you have a driver’s license?</small>
                    </div>
                    <div class="col-md-5">
                     <div class="radiobttn">
                        <input type="radio" id="testL" name="radio-groupLI" checked>
                        <label style="top:0px;" for="testL">Yes</label>
                      
                       <input type="radio" id="testI" name="radio-groupLI" checked>
                      <label  style="top:0px;" for="testI">No</label>
                     </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="FullWidth width45"> <input type="text" name="applylicensetype" id="applylicensetype" placeholder="License Type"/></div>
                  <div class="FullWidth width45"> <input type="text" name="applylicensenumber" id="applylicensenumber" placeholder="License Number"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="applyexp" id="applyexp" placeholder="Previous experience?"/></div>
                 <div class="clearfix"></div>
               

                  <div class="FullWidth">
                    <div class="col-md-7 zero">
                     <small>Do you have site safe passport?</small>
                    </div>
                    <div class="col-md-5">
                     <div class="radiobttn">
                        <input type="radio" id="testA" name="radio-groupPA" checked>
                        <label  style="top:0px;" for="testA">Yes</label>
                      
                       <input type="radio" id="testB" name="radio-groupPA" checked>
                      <label  style="top:0px;" for="testB">No</label>
                     </div>
                    </div>
                  </div> 
                  <div class="clearfix"></div>
                  
                  <div class="FullWidth">
                    <div class="col-md-7 zero">
                     <small>Do you have your own transport?</small>
                    </div>
                    <div class="col-md-5">
                     <div class="radiobttn">
                        <input type="radio" id="testC" name="radio-groupDO" checked>
                        <label  style="top:0px;" for="testC">Yes</label>
                      
                       <input type="radio" id="testD" name="radio-groupDO" checked>
                      <label  style="top:0px;" for="testD">No</label>
                     </div>
                    </div>
                  </div> 
                  <div class="clearfix"></div>
                  
                  <div class="FullWidth">
                    <div class="col-md-7 zero">
                     <small>Are you available for weekend work?</small>
                    </div>
                    <div class="col-md-5">
                     <div class="radiobttn">
                        <input type="radio" id="testE" name="radio-groupAR" checked>
                        <label  style="top:0px;" for="testE">Yes</label>
                      
                       <input type="radio" id="testF" name="radio-groupAR" checked>
                      <label  style="top:0px;" for="testF">No</label>
                     </div>
                    </div>
                  </div> 
                  <div class="clearfix"></div>
                  <div class="FullWidth"><input type="text" name="applydoa" id="applydoa" placeholder="Date of application:"/></div>
                  <div class="clearfix"></div>
                  <div class="FullWidth"><textarea name="applymessage" id="applymessage" placeholder="Message"></textarea></div>
                  <div class="clearfix"></div>
                   <button type="submit" name="apply_btn" id="apply_btn">Submit</button> 
                </form>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
</div>

<script src="javascript/jquery.min.js" type="text/javascript"></script>
<script src="javascript/modernizr.js" type="text/javascript"></script>
<script src="stylesheet/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script> 
$(function () {
  $(".datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
 </script>
<script src="javascript/jquery.validate.js" type="text/javascript"></script>
<script src="javascript/custom.js" type="text/javascript"></script>
</body>
</html>
