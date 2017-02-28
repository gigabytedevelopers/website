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
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --><!--/ Codrops top bar -->
            <header>
                <a href="index"><h1>Gigabyte Developers Incorporated</h1></a>
				<!-- <nav class="codrops-demos">
					<span>Click <strong>"Join us"</strong> to see the form switch</span>
					<a href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html" class="current-demo">Demo 3</a>
				</nav> -->
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
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
		header('Location: changepassword?success');
	} else if (empty($errors) === false) {
		// output errors
		echo output_errors($errors);
	}
	?>
<!-- <p>Just a Gigabyte Developers Inc user system</p> -->

							<form  action="" method="post" autocomplete="on"> 
                                <p> 
                                    <label for="current_password" class="uname" data-icon="p" > Current Password </label>
                                    <input id="current_password" name="current_password" required="required" type="password" placeholder="Password"/>
                                </p>&nbsp
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> New Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p> 
									<label for="password_again" class="youpasswd" data-icon="p"> New Password again </label>
                                    <input id="password_again" name="password_again" required="required" type="password" placeholder="eg. X8df!90EO" /> 
								</p>
								<p class="recover buttons"> 
									<input type="submit" value="Change Password" /> 
								</p>
                            </form>
<?php 
}
include 'includes/overall/overallfooter.php'; 
?>
