<?php
function email($to, $subject, $boby, $headers) {
	$headers = 'From: <gigabytedevelopers@gmail.com>' . "\r\n" .
	'Reply-To: <gigabytedevelopers@gmail.com>';
	$body = $boby;
	mail($to, $subject, $body, $headers);
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
	$item = htmlentities(strip_tags(((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $item) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""))));
}
function sanitize($data) {
	return htmlentities(strip_tags(((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $data) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""))));
}
function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors). '</li></ul>';
}
?>