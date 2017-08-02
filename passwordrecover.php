<?php
include 'core/init.php';
// CHECK
logged_in_redirect();
?><!DOCTYPE html><html class=no-js lang=en><!--<![endif]--><?php include 'includes/headtoheaderforgot.php'; ?><?php include_once("includes/googleanalyticstracking.php") ?><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div id=login class="animate form"><?php
?><h1>Password Recovery</h1><?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?><p class=textmode>Thank's we've emailed you a new password.<p class=textmode>Use the password to <a href=login>login</a> next time. Remember, you will be forced to change the password to a password of your choice whice you can easily remember!</p><?php
} else {
	$mode_allowed = array('password');
	if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
		if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
			if (email_exists($_POST['email']) === true) {
				recover($_GET['mode'], $_POST['email']);
				header('Location: passwordrecover?success');
				exit();
			} else {
				echo '<p>Oops, we could\'t find that email address</p>';
			}
		}
	?><form action=""method=post><p><label class=email data-icon=e for=email>Please enter your registered email address</label><input id=email name=email placeholder="Email Address"required><p class="buttons recover"><input type=submit value=Recover></form><?php
	} else {
		header('Location: index');
		exit();
	}
}
?>