<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Hello dear! You need to enter a Username and Password';
	} else if (user_exists($username) === false) {
		$errors[] = 'Sorry We can\'t find that username, Have you registered?';
	} else if (user_active($username) === false) {
		$errors[] = 'You have\'nt activated your account!';
	} else {
		if (strlen($password) > 32) {
			$errors[] = 'Password too long';
		}
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'Sorry dear, that username/password combination is incorrect';
		} else {
			$_SESSION['user_id'] = $login;
			header('Location: loggedin');
			exit();
		}
	}
}
?><!DOCTYPE html><html class=no-js lang=en><!--<![endif]--><?php include 'includes/headtoheaderenter.php'; ?><?php include_once("includes/googleanalyticstracking.php") ?><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div class="animate form"id=login><form action=""autocomplete=on method=post><h1>Log in</h1><?php
								if (empty($errors) === false) {
								?><h2>We've tried our best to log you in, but...</h2><?php
									echo output_errors($errors);
								}
								?><p><label for=username class=uname data-icon=u>Your email or username</label><input value="<?php if(empty($_POST) === false) echo $_POST['username']; ?>"id=username name=username placeholder=Username required onkeyup=checkname()></p><span id=name_status></span><div class=sminputs><div class="full input"><p><label for=password class=youpasswd data-icon=p>Your password</label><input value="<?php if(empty($_POST) === false) echo $_POST['password']; ?>"id=password name=password placeholder=Password required maxlength=8 type=password> <span id=eye class=hide-password onclick='"text"==password.type?password.type="password":password.type="text"'type=button><img src=images/eye.png alt="See" style=width:25px;height:25px;padding-top:5px></span></div></div><p class=keeplogin><input value=loginkeeping id=loginkeeping name=loginkeeping type=checkbox><label for=loginkeeping>Keep me logged in</label><p>Forgot <a href="recover?mode=username">username</a> or <a href="passwordrecover?mode=password">password</a>?<p class="button login"><input value=Login type=submit><p class=change_link>Not a member yet ? <a class=to_register href=register>Join us</a></form></div></div></div></section><script>function checkname(){var e=document.getElementById("username").value;if(!e)return $("#name_status").html(""),!1;$.ajax({type:"post",url:"../classes/checkdata.php",data:{username:e},success:function(e){return $("#name_status").html(e),"OK"==e}})}function checkemail(){var e=document.getElementById("email").value;if(!e)return $("#email_status").html(""),!1;$.ajax({type:"post",url:"classes/checkdata.php",data:{email:e},success:function(e){return $("#email_status").html(e),"OK"==e}})}</script><script src=js/index.js></script>