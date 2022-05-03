<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	class DbQueries{

		function email_function($email, $subject, $content){
			$headers = "From: SupportBase Solutions <admin@supportbasesolution.com.au>"."\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$mail = mail($email, $subject, $content, $headers);
			return $mail;
		}

		public function email_function1($email, $subject, $body){
			
			//Load Composer's autoloader
			require '../../vendor/autoload.php';

			//Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                
			    $mail->isSMTP();
			    $mail->Host       = 'mail.supportbasesolution.com.au';
			    $mail->SMTPAuth   = true;
			    $mail->Username   = 'info@supportbasesolution.com.au';
			    $mail->Password   = 'Password 8430@.';
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			    $mail->Port       = 465;
			    $mail->SMTPDebug = 1;

			    //Recipients
			    $mail->setFrom('info@supportbasesolution.com.au', 'SupportBase Solution');
			    $mail->addAddress($email, 'Contact');
			    // $mail->addReplyTo('info@example.com', 'Information');
			    // $mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    //Attachments
			    // $mail->addAttachment('../'.$attachment);
			    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

			    //Content
			    $mail->isHTML(true);
			    $mail->Subject = $subject;
			    $mail->Body    = $body;
			    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    if($mail->send()){
			    	return true;
			    }else{
			    	return false;
			    }
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

	}
?>