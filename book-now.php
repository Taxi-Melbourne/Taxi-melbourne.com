<?php
/*--------------------------------------------*/
/* Email Submited Book Form           */
/*--------------------------------------------*/

$post = (!empty($_POST)) ? true : false;

if($post){
    $to = "your_email@your_domain.com"; // Your e-mail here
	$when = stripslashes($_POST['when']);
	$hour = stripslashes($_POST['hour']);
	$startDestination = stripslashes($_POST['startDestination']);
	$endDestination = stripslashes($_POST['endDestination']);
	$chooseVehicle = stripslashes($_POST['chooseVehicle']);
	$phoneNumber = stripslashes($_POST['phoneNumber']);
	$subject = "BOOK NOW";
	
	$mail = mail($to, $subject,
         "Phone Number: ".$phoneNumber."\r\n"	
	    ."Date: ".$when." Hour: ".$hour."\r\n"
	    ."From: ".$startDestination." To: ".$endDestination."\r\n"
	    ."Vehicle: ".$chooseVehicle."\r\n"
	    ."X-Mailer: PHP/" . phpversion());

	if($mail){
		echo 'OK majl: '.$mail;
	}

}

?>