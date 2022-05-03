<?php
	require_once("../classes/db_class.php");
	$object = new DbQueries();
	$name = $_POST['fullname'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone_number'];
	$message = $_POST['message'];
	if($name == '' || $email_address == '' || $phone == '' || $message == ''){
		echo "Empty field(s) found";
	}
	else{
		$content = "<p><b>Full Name:</b> ".$name.".</p> <p> <b>Email Address:</b> ".$email_address."</p>";
		$content.= "<p><b>Phone Number:</b> ".$phone."</p>";
		$content.= "<p><b>Message:</b> ".$message."</p>";
		$send_mail = $object->email_function('info@supportbasesolution.com.au', 'Contact Form', $content);
		if($send_mail){
			echo "success";
		}else{
			echo "Please try again";
		}
	}

?>