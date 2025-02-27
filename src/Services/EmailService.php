<?php

namespace App\Services;

use \App\Config;
use \App\Services\EntityService as Entities;
use \App\Services\PropertyService as Properties;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use \App\Services\ToastService as Toast;

class EmailService
{

	
	public static function send($to, $subject, $sbody){
		
		$mail=new PHPMailer();
		$mail->IsSMTP();    
		$mail->Port = $_ENV['SMTP_PORT'];
		$mail->SMTPAuth = true;               
		$mail->Username= $_ENV['SMTP_USERNAME'];
		$mail->Password = $_ENV['SMTP_PASSWORD'];
		$mail->Host= $_ENV['SMTP_HOST'];
		$mail->SMTPSecure = $_ENV['SMTP_SECURE'];
		$mail->From = $_ENV['SMTP_FROM_EMAIL'];
		$mail->FromName = $_ENV['SMTP_FROM_NAME'];
		$mail->AddEmbeddedImage(DIR_STATIC . "/img/email-header.png", "logo", "logo.png");
		$mail->AddAddress($to); 
		$mail->MsgHTML($sbody);
		$mail->isHTML(true);
		$mail->Body    = $sbody;
		$mail->Subject = $subject;
		
		if(!$mail->Send()) {
			Toast::throwError("Email not sent", $mail->ErrorInfo);			
		}
	}
	
	
	public static function sendTemplate($template, $to, $subject, $arguments){
		
		$template = DIR_VIEWS . '/Email/' . $template . ".html";
		if(file_exists($template)){
			
			$content = file_get_contents($template);
			
			foreach($arguments as $key => $value){
				$content = str_replace("{{" . $key . "}}", $value, $content);
			}
			
			self::send($to, $subject, $content);
		
		
			
		}else{
			
			Toast::throwError("Email template not found", "No template was found for $template");
		}
		
	
		
	}
	
	
	/*
	
	Emails which can be sent
	
	*/
	
	
	/* Sends an email to the user to reset password as a new user*/
	public static function newUserEmail($userId, $token){
		
		$user = Entities::findEntity("user", $userId);	
		self::sendTemplate('new_user',$user->getEmail(),'You\'ve been invited to join PRATS', array('name' => $user->getFirstName(), 'link' => _URL_ROOT . '/reset-password?token=' . $token));
		
	}	
	
	/* Sends an email to the user with a link to reset their password*/
	public static function resetPasswordEmail($userId, $token){
		
		$user = Entities::findEntity("user", $userId);	
		self::sendTemplate('reset_password',$user->getEmail(),'Password Reset', array('name' => $user->getFirstName(), 'link' => _URL_ROOT . '/reset-password?token=' . $token));
		
	}		
	
	
	
	
}

