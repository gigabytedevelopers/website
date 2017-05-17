<?php
include 'core/init.php';
protect_page();
if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Hello! The fields marked with an asterisk are required';
			break 1;
		}
	}
	if (md5($_POST['current_password']) === $user_data['password']) {
	if (trim($_POST['password']) !== trim($_POST['password_again'])) {
			$errors[] = 'Your new passwords do not match perfectly!';
		} else if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your new passwords must be at least 6 characters!';
		}
	} else {
		$errors[] = 'Your current password is incorrect';
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers Incorporated | Change Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official Account Reset Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <meta name="theme-color" content="#028fcc">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
    </head>
    <body>
	<?php include_once("includes/googleanalyticstracking.php") ?>
        <div class="container">
            <header>
                <a href="index"><h1>Gigabyte Developers Incorporated</h1></a>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
?>
<h1>Change Password</h1>
<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?>
		<p class="textmode">Congratulations! your password has been successfully changed!.</p>
	<?php
} else {
	if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
	?>
		<p class="textmode">You must reset your password before continuing!...</p>
	<?php
	}
	if (empty($_POST) === false && empty($errors) === true) {
		// posted the form and no errors
		change_password($session_user_id, $_POST['password']);
		echo '<meta http-equiv="refresh" content="0; URL=changepassword?success">';
	} else if (empty($errors) === false) {
		// output errors
		echo output_errors($errors);
	}
	?>
<!-- <p>Just a Gigabyte Developers Inc user system</p> -->
					<form  action="" method="post" autocomplete="on"> 
						<div class="sminputs">
							<div class="input full">
                                <p> 
                                    <label for="current_password" class="uname" datalock-icon="p" > Current Password </label>
                                    <input id="current_password" name="current_password" required="required" type="password" placeholder="Password" maxlength="8" />
									<span type="button" id="eye" class="hide-password" onclick="if(current_password.type=='text')current_password.type='password'; else current_password.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
                                </p>&nbsp
							</div>
						</div>
						<div class="sminputs">
							<div class="input full">
                                <p> 
                                    <label for="password" class="youpasswd" datalock-icon="p"> New Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" maxlength="8" /> 
									<span type="button" id="eye" class="hide-password" onclick="if(password.type=='text')password.type='password'; else password.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
                                </p>
							</div>
						</div>
						<div class="sminputs">
							<div class="input full">
                                <p> 
									<label for="password_again" class="youpasswd" datalock-icon="p"> New Password again </label>
                                    <input id="password_again" name="password_again" required="required" type="password" placeholder="eg. X8df!90EO" maxlength="8" /> 
									<span type="button" id="eye" class="hide-password" onclick="if(password_again.type=='text')password_again.type='password'; else password_again.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
								</p>		
							</div>
						</div>
								<p class="recover buttons"> 
									<input type="submit" value="Change Password" /> 
								</p>
                    </form>
<?php } ?>