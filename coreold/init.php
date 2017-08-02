<?php
session_start();
//error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'password_recover', 'type', 'allow_email', 'profile', 'country', 'phonenumber', 'sex');
	$login = user_data($session_user_id, 'user_id', 'username', 'email');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: index');
		exit();
	}
	if ($current_file !== 'changepassword' && $user_data['password_recover'] == 1) {
		header('Location: changepassword?force');
		exit();
	}
}

$errors = array();
?>