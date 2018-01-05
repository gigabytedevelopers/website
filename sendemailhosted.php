<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $_POST['name'];//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user:- \n\nName: $name \n".
"Email Address: $visitor_email \n".
    "Message: $message \n";
    
$to = "gigabytedevelopers@gmail.com";//<== update the email address
$from = "Reply-To: $visitor_email";
$headers .= "\r\n Reply-To: $visitor_email \r\n";
//Send the email!
mail($to, $email_subject, $email_body, "From: Gigabyte Developers " . $visitor_email);
//done. redirect to thank-you page.
header('Location: bat/thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 