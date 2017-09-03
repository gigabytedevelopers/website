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
?><!DOCTYPE html><html class=no-js lang=en><!--<![endif]--><meta charset=UTF-8><title>Gigabyte Developers Incorporated | Change Password</title><meta content=https://www.gigabytedevelopersinc.com/images/thumbnail.png property=og:image:secure_url><meta content=website property=og:type><meta content="Gigabyte Developers Incorporated"property=og:site_name><meta content="Gigabyte Developers Incorporated | Change Password"property=og:title><meta content="Official Password Reset page of Gigabyte Developers Incorporated"property=og:description><meta content="width=device-width,initial-scale=1"name=viewport><meta content="Official Password Reset page of Gigabyte Developers Incorporated"name=description><meta content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class"name=keywords><meta content="Gigabyte Developers Incorporated"name=author><meta content=#028fcc name=theme-color><link href=css/demo.css rel=stylesheet><link href=css/style3.css rel=stylesheet><link href=css/animate-custom.css rel=stylesheet><link href=images/gigaicon.ico rel="shortcut icon"><?php include_once("includes/googleanalyticstracking.php") ?><div class=container><header><a href=index><h1>Gigabyte Developers Incorporated</h1></a></header><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div class="animate form"id=login><?php
?><h1>Change Password</h1><?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?><script type="text/javascript">
		var timeleft = 5;
		var downloadTimer = setInterval(function(){
		timeleft--;
		document.getElementById("countdowntimer").textContent = timeleft;
		if(timeleft <= 0)
			clearInterval(downloadTimer);
		},1000);
	</script>
	<p class=textmode>Congratulations! your password has been successfully changed!.</p><h3>...You will be loggedin automatically in <span id="countdowntimer">5 </span>s</h3><meta http-equiv="refresh" content=5;url=login><?php
} else {
	if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
	?><p class=textmode>You must reset your password before continuing!...</p><?php
	}
	if (empty($_POST) === false && empty($errors) === true) {
		// posted the form and no errors
		change_password($session_user_id, $_POST['password']);
		header('Location: changepassword?success');
	} else if (empty($errors) === false) {
		// output errors
		echo output_errors($errors);
	}
	?><form action=""autocomplete=on method=post><div class=sminputs><div class="full input"><p><label for=current_password>Current Password</label><input type=password id=current_password maxlength=8 name=current_password placeholder=Password required> <span class=hide-password id=eye onclick='"text"==current_password.type?current_password.type="password":current_password.type="text"'type=button><img src=images/eye.png alt="See" style=width:25px;height:25px;padding-top:5px></span></p> </div></div><div class=sminputs><div class="full input"><p><label for=password>New Password</label><input type=password id=password maxlength=8 name=password placeholder="eg. X8df!90EO"required> <span class=hide-password id=eye onclick='"text"==password.type?password.type="password":password.type="text"'type=button><img src=images/eye.png alt="See" style=width:25px;height:25px;padding-top:5px></span></div></div><div class=sminputs><div class="full input"><p><label for=password_again>New Password again</label><input type=password id=password_again maxlength=8 name=password_again placeholder="eg. X8df!90EO"required> <span class=hide-password id=eye onclick='"text"==password_again.type?password_again.type="password":password_again.type="text"'type=button><img src=images/eye.png alt="See" style=width:25px;height:25px;padding-top:5px></span></div></div><p class="buttons recover"><input type=submit value="Change Password"></form><?php } ?>