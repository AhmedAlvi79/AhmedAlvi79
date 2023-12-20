<?php
include 'functions.php';
include 'deep.php';

if(isset($_POST['emailsub'])) 
{	
	$reqFieldsArray = ['name' =>$_POST["name"],'email' => $_POST["email"], 'subject' =>$_POST["subject"],'message' => $_POST["message"]];

	if (checkEmpty($reqFieldsArray)) 
	{
		
		$reqFieldsArray = ['name' =>$_POST["name"],'email' => $_POST["email"], 'subject' =>$_POST["subject"]];
		if(checklength($reqFieldsArray,'short')) 
		{
		
			if (checklength($reqFieldsArray=['message'=>$_POST["message"]],'long'))
			{

				$name = strip_tags($conn->real_escape_string($_POST['name']));
				$email = strip_tags($conn->real_escape_string($_POST['email']));
				$subject = strip_tags($conn->real_escape_string($_POST['subject']));
				$message = strip_tags($conn->real_escape_string($_POST['message']));

				$email_sql = "INSERT INTO info_email(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
				if ($conn->query($email_sql)) 
			     {
			     	include 'not_error.php';
			     }else 
			     {
			     	include '404.php';	
			     }
				
			}else{
				include '404.php';
			}			
		}else{
			include '404.php';
		}		
	}else{
		include '404.php';
	}
}else{
	include '404.php';
}
// header("Location:http://localhost/my_portfolio/");

$conn->close();

?>