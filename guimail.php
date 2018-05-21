<?php
	include("plugins/phpmailer2/class.smtp.php");
	include ("plugins/phpmailer2/class.phpmailer.php"); 
	$mail = new PHPMailer();  
	$mail->IsSMTP(); // set mailer to use SMTP   
	$mail->Mailer = 'IAP';
	$mail->Host = "smtp.gmail.com"; // specify main and backup server   
	$mail->Port = 465; // set the port to use   
	$mail->SMTPAuth = false; // turn on SMTP authentication   
	$mail->SMTPSecure = 'ssl';   
	$mail->Username = "baotoannguyen193@gmail.com"; // your SMTP username or your gmail username   
	$mail->Password = "baonhu1993"; // your SMTP password or your gmail password   
	$from = "toannguyenck5@gmail.com"; // Reply to this email   
	$to="toannguyenck5@gmail.com"; // Recipients email ID   
	$name="ITLC"; // Recipient's name   
	$mail->From = $from;   
	$mail->FromName="Ten Nguoi Gui"; // Name to indicate where the email came from when the recepient received   
	$mail->AddAddress($to,$name);   
	$mail->AddReplyTo($from,"ITLC");   
	$mail->WordWrap = 50; // set word wrap   
	$mail->IsHTML(true); // send as HTML   
	$mail->Subject = "Test mail script from bloghoctap.com";   
	$mail->Body = "Mail nay duoc goi bang phpmailer class. - ITLC.TNUS.EDU.VN"; //HTML Body   
	$mail->AltBody = "Mail nay duoc goi bang phpmailer class. - itlc.tnus.edu.vn"; //Text Body   
	$mail->SMTPDebug = 2;   

	if(!$mail->Send())   
	{   
		echo "  
	Loi khi goi mail: " . $mail->ErrorInfo . '  
	
	';   
	}   
	else   
	{   
		echo "  
	Send mail thanh cong  
	
	";   
	}  
?>