<?php
function email($to, $subject, $boby) {
	mail($to, $subject, $body, 'From: gigabytedevelopers@gmail.com');
}

function  logged_in_redirect() {
	if (logged_in() === true) {
		header('Location: loggedin');
		exit();
	}
}

function protect_page() {
	if (logged_in() === false) {
		header('Location: protected');
		exit();
	}
}

function admin_protect() {
	global $user_data;
	if (is_admin($user_data['user_id']) === false) {
		header('Location: index');
		exit();
	}
}

function array_sanitize(&$item) {
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}

function sanitize($data) {
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}

function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors). '</li></ul>';
}
?>