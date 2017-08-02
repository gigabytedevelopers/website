<?php
include 'core/init.php';
protect_page();

if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username 		= $_GET['username'];
	
	if (user_exists($username) === true) {
	$user_id 		= user_id_from_username($username);
	$profile_data 	= user_data($user_id, 'username', 'first_name', 'last_name', 'email', 'profile', 'country', 'phonenumber', 'sex', 'active', 'type');
	$file_path = $user_data ['profile'];
?><!DOCTYPE html><html class=no-js lang=en><!--<![endif]--><meta charset=UTF-8><title>Gigabyte Developers Incorporated | Profile</title><meta content="width=device-width,initial-scale=1"name=viewport><meta content="Official User Profile Page of Gigabyte Developers Incorporated"name=description><meta content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class"name=keywords><meta content="Gigabyte Developers Incorporated"name=author><meta content=#028fcc name=theme-color><link href=css/demo.css rel=stylesheet><link href=css/style3.css rel=stylesheet><link href=css/animate-custom.css rel=stylesheet><link href=images/gigaicon.ico rel="shortcut icon"><div class=container><header><a href=../index.php><h1>Gigabyte Developers <span>User Profile</span></h1></a></header><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div id=login class="animate form"><?php
	?><h1><?php echo $profile_data['first_name']; ?>'s Profile</h1><p><?php echo '<img style="border-radius:50%", class="profile-center", src="../',  $profile_data['profile'], '" alt="Profile Picture">'; ?><p>Username:&nbsp<?php echo $profile_data['username']; ?><p>Gender:&nbsp<?php if ($profile_data['sex'] == true) { echo $profile_data['sex']; } else { echo 'Unspecified'; }?><p>Email:&nbsp<?php echo $profile_data['email']; ?><p>First Name:&nbsp<?php echo $profile_data['first_name']; ?><p>Last Name:<?php echo $profile_data['last_name']; ?><p>Nationality:&nbsp<?php if ($profile_data['country'] == true) { echo $profile_data['country']; } else { echo 'None'; }?><p>Phone Number:&nbsp<?php if ($profile_data['phonenumber'] == true) { echo $profile_data['phonenumber']; } else { echo 'Not Yet Specified'; }?></p><p>Member Status:&nbsp<?php if ($profile_data['active'] == 1) { echo '<b style="font-weight:normal;color:green;" class="fa fa-certificate">&nbspCertified Active Member</b>'; } else { echo '<b style="color:red;" class="fa fa-warning">&nbspInactive or Deactivated Member</b>'; }?></p><p>Membership Type:&nbsp<?php if ($profile_data['type'] == 1) { echo '<b style="font-weight:600;font-size:18px">System Administrator</b>'; } else if ($profile_data['type'] == 2) { echo '<b style="font-weight:600;font-size:18px">System Moderator</b>'; } else { echo '<b style="font-weight:600;font-size:18px">Normal User</b>'; }?></p>
<style>
	@font-face {
    font-family: 'FontAwesome';
    src: url('../fonts/fontawesome-webfont.eot?v=4.1.0');
    src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff?v=4.1.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.1.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal
	}
	.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
	}
	.fa-certificate::before {
    content: "\f0a3";
	color: #028fcc;
	}
	.fa-warning::before,
	.fa-exclamation-triangle::before {
    content: "\f071";
    padding-left: 0px
	}
	.fa-warning:before,
	.fa-exclamation-triangle:before {
	content: "\f071";
	color: red;
	}
</style><?php
	} else {
		?><!DOCTYPE html><html class=no-js lang=en><!--<![endif]--><meta charset=UTF-8><title>Gigabyte Developers Incorporated | Profile</title><meta content="width=device-width,initial-scale=1"name=viewport><meta content="Official User Profile Page of Gigabyte Developers Incorporated"name=description><meta content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class"name=keywords><meta content="Gigabyte Developers Incorporated"name=author><link href=css/demo.css rel=stylesheet><link href=css/style3.css rel=stylesheet><link href=css/animate-custom.css rel=stylesheet><link href=images/gigaicon.ico rel="shortcut icon"><div class=container><header><a href=../index.php><h1>Gigabyte Developers Incorporated</h1></a></header><section><div id=container_demo><a class=hiddenanchor id=toregister></a> <a class=hiddenanchor id=tologin></a><div id=wrapper><div id=login class="animate form"><?php
?><h1><?php echo 'Dead End!';?></h1><p class=textmode>Sorry, this user (<b>"<?php echo $_GET['username'] ?>"</b>) isn't registered on our database. Please try again!<p class=textmode>If this problem persists and you are very sure of what you are doing, then head straight to contact our hotline by calling +2348104309369, or email: <a href=mailto:nwokomaemmanuel@gmail.com>Administrator</a>.</p><?php
	}
}
 
include 'includes/overall/overallfooter.php'; ?>