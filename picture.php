<?php
include 'core/init.php';
protect_page();
?><!DOCTYPE html><html class=no-js lang=en><meta charset=UTF-8><title>Gigabyte Developers | Update Profile Picture</title><meta content="width=device-width,initial-scale=1"name=viewport><meta content="Login and Registration Form with HTML5 and CSS3"name=description><meta content="html5, css3, form, switch, animation, :target, pseudo-class"name=keywords><meta content="Gigabyte Developers Incorporated"name=author><meta content=#028fcc name=theme-color><link href=images/gigaicon.ico rel="shortcut icon"><link href=css/demo.css rel=stylesheet><link href=css/style3.css rel=stylesheet><?php include_once("includes/googleanalyticstracking.php") ?><div class=container><header><a href=index><h1>Gigabyte Developers <span>Edit Profile Picture</h1></a></header><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div id=login class="animate form"><?php
?><h1>Update Profile Picture</h1><?php
if (isset($_FILES['profile']) === true) {
	if (empty($_FILES['profile']['name']) === true) {
		echo 'Please choose a file';
	} else {
		$allowed = array('jpg', 'jpeg', 'png');
		$file_name = $_FILES['profile']['name'];
		$file_extn = strtolower(end(explode('.', $file_name)));
		$file_temp = $_FILES['profile']['tmp_name'];
		if (in_array($file_extn, $allowed) === true) {
			change_profile_image($session_user_id, $file_temp, $file_extn);
			echo 'Your profile picture has been updated';
		} else {
			echo 'Invalid picture format allowed:';
			echo implode(', ', $allowed);
		}
	}
}
?><form action=""enctype=multipart/form-data method=post><p><label class=profile for=profile gigabyte-icon=fa-picture>Update Picture Picture</label><input type=file value="Select a valid picture"id=files name=profile placeholder="Select a valid picture"><p style=text-align:center><img alt="Profile Picture" id=image style=padding-top:10px;width:150px;height:150px><p class="buttons recover"><input type=submit value="Update Profile Picture"></form><script>document.getElementById("files").onchange=function(){var e=new FileReader;e.onload=function(e){document.getElementById("image").src=e.target.result},e.readAsDataURL(this.files[0])}</script>