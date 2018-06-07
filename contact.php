
<?php include 'include/header.php'; 

if(isset($_REQUEST['sub_btn'])){
$to      = 'info@stronglh.co.nz';
//$to      = 'ph9716942965@gmail.com';
$subject = 'Contact Query';
$message = "Hi Administrator,". "\r\n\r\n" 
        . "First Name: ".$_REQUEST['firstname']."". "\r\n" 
        . "Last Name: ".$_REQUEST['lastname']."". "\r\n" 
        . "Company: ".$_REQUEST['company']."". "\r\n" 
        . "Phone: ".$_REQUEST['phone']."". "\r\n" 
        . "Email: ".$_REQUEST['email']."". "\r\n" 
        . "Message :".$_REQUEST['message']."";
$headers = 'From: '.$_REQUEST['email'].'' . "\r\n" .
    'Reply-To: info@stronglh.co.nz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mailcontact = mail($to, $subject, $message, $headers);
if($mailcontact){
?>
<script>
	alert("Contact Send Succesfully!");
</script>
<?php	
	}
}
?>
 <div class="container-fluid marginTop">
   <div class="row">
     <div class="col-md-12 zero">
       <div class="ContactForm">
          <div class="col-md-9 zero">
            <div class="InnerFormGrid">
              <form name='contactfrm' id='contactfrm' method='post'>
                 <p class="width45"> <input type="text" name="firstname" id="firstname" placeholder="First Name"/></p>
                 
                 <p class="width45"><input type="text" name="lastname" id="lastname" placeholder="Last Name"/></p>
                 
                 <p class="width45"> <input type="text" name="company" id="company" placeholder="Company"/></p>
                 
                 <p class="width45"><input type="text" name="phone" id="phone" placeholder="Phone"/></p>
                 
                 <p><input type="text" name="email" id="email" placeholder="Email"/></p>
                 
                 <p><textarea name="message" id="message" placeholder="Message"></textarea></p>
                 
                 <input type="submit" value="Submit" name="sub_btn" id="sub_btn"/>
              </form>
            </div>
          </div> 
           <div class="col-md-3">
             <div class="RightImg">
               <img src="img/contact.png" alt="Contact Img"/>
             </div>
           </div>
       </div>
     </div>
   </div>
 </div>
<div class="container marginTop">
  <div class="row">
    <div class="col-md-12">
      <div class="Contact_Dt">
        <div class="col-md-6">
          <a href="javascript:;">
           <img src="img/phone.png" alt="Phone"/>
           021 SLHIRE
          </a>
        </div>
        
        <div class="col-md-6">
         <a href="javascript:;">
           <img src="img/phone.png" alt="Phone"/>
           021 75 4473
          </a>
        </div>
        
        <div class="col-md-6">
         <a href="javascript:;">
           <img src="img/pobox.png" alt="Phone"/>
           PO Box 64008, Botany, Auckland 2163
          </a>
        </div>
        
        <div class="col-md-6">
         <a href="javascript:;">
           <img src="img/email.png" alt="Phone"/>
           info@stronglh.co.nz
          </a>
        </div>
        
        <div class="col-md-12">
         <h2>GETTING THE JOB DONE</h2>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>
