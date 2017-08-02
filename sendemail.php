<?php
if(isset($_POST["submit"])){
//Checking for blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail']; 
 // Sanitize e-mail address
 $email =filter_var($email, FILTER_SANITIZE_EMAIL);
 // Validate e-mail address
 $email= filter_var($email, FILTER_VALIDATE_EMAIL);
 if (!$email){
echo "Invalid Sender's Email";
 }
 else{
 $subject = $_POST['sub'];
 $message = $_POST['msg'];
 $headers = 'From:'. $email . "\r\n"; // Sender's Email
 $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message = wordwrap($message, 70);
 // Send mail by PHP Mail Function
 mail("recievers_mail_id@xyz.com", $subject, $message, $headers);
 echo "Your mail has been sent successfuly ! Thank you for your feedback";
 }
}
}
?>