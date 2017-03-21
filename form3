<form name="form1" action="freequote_temp.php" method="post" onSubmit="return validate()">
                          <div class="contact_info">
                            <div class="cont-row">
                              <input type="text" name="contact" value="" placeholder="Enter Your Name...">
                            </div>
                            <div class="clear"></div>
                            <div class="cont-row">
                              <input type="text" name="email" value="" placeholder="Enter Your Email...">
                            </div>
                            <div class="clear"></div>
                            <div class="cont-row">
                              <input type="text" name="main_ph" value="" placeholder="Enter Your Phone Number...">
                            </div>
                            <div class="clear"></div>
                            <div class="cont-row">
                              <input type="text" name="suburb" value="" placeholder="Enter Your Suburb...">
                            </div>
                            <div class="clear"></div>
                            <div class="cont-row">
                              <textarea name="comment" placeholder="How Can We Help?" ></textarea>
                            </div>
                            <div class="clear"></div>
                            <input type="hidden" name="status" value="Submitted" /><input type="submit" value="SUBMIT" class="but1 fl-lt" name="">
                            <div class="clear"></div>
                          </div>
                          </form>
                          
                          
                          
                          
                          
<?php

$status=$_POST['status'];
if($status=="Submitted")
	{
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$main_ph=$_POST['main_ph'];
		$suburb=$_POST['suburb'];
		$comment=$_POST['comment'];
		
		$to = "info@perthceilingfixers.com.au,tanuj.gupta@digitalwebsolutions.in";
		
		//message Subject starts
		$subject = "Free Quote request from $contact";
		//message Subject ends
		
		$message = "<br>"
		 . "Name: $contact<br>"
		 . "E-mail: $email<br>"
		 . "Phone: $main_ph<br>"
		 . "Suburb: $suburb<br>"
		 . "Message: $comment<br><br><br>"
		 . "Thanks and Regards $contact<br>"
		 . "<br>"
		 . "";
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $contact<$email>\r\n";
		
		/* and now mail it */
		@mail($to, $subject, $message, $headers);
		header("location: thankyou.html");
	}
?>
