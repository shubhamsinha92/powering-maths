<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<title>Thanks</title>


</head>
<body   topmargin="0" leftmargin="0" bgcolor="#FFFBF0">
<table width="778" border="0" cellpadding="0" cellspacing="0" align="center" >
  <!--DWLayoutTable-->
  <tr>
    <td colspan="2"><img src="images/thank-you1.jpg"></td>
  </tr>

   
    <td width="559" valign="top" bgcolor="#FFFFFF">
	
	
	<?php
	
	
		$name=$_POST['name'];
	
		$contact_no=$_POST['contact_no'];

		$email=$_POST['email'];

		$address=$_POST['address'];

		$about=$_POST['about'];


			$from = $email;
			
			$to="poweringmaths@gmail.com";

			$subject = "From: Website Visitors";

			$body = "Feedback of the Visitor is......." . "

 			";
			$body .= "Name: " . $name . "
			
			";
			
			$body .= "Contact Number is : " . $contact_no . "
			
			";
			
			$body .= "Email Address is  " . $email . "
			
			";

			$body .= "Email: " . $email . "

			";
			
			$body .= "Subject is  " . $address . "

			";

			$body .= "Feedback is " . $about . "

			";


			$headers = "From: $from" . "

			";

			$headers .= "Reply-To: $from" . "

			";

			$headers .= "Return-Path: $from" . "

			";


			$isMailed = mail($to, $subject, $body, $headers);
			
			
			

			
			
			
			if($isMailed)
			{

				echo "Thank you for your Feedback, " . $name . "  We will get back to you shortly.";

			}
			else
			{

				echo "Feedback Not Sent to the Admin";

			}

	
	?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" background="images/design_30.jpg " width="778" height="27"><p align="left" class="style7"> <a href="contactus.htm" title="FeedBack"> <strong><img src="images/backbutton.gif" border="0"/></strong></a></p></td>
  </tr>
</table>
</body>
</html>
