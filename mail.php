<?php
include 'core/init.php';
protect_page();
admin_protect();
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers Incorporated | No Access</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official User Page of Gigabyte Developers Incorporated" />
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
                <a href="index"><h1>Gigabyte Developers Incorporated </h1></a>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
				<h1>Email all users!</h1>
<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<p class="textmode" >Email has been sent successfully!</p>
<?php
} else {
	if (empty($_POST) === false) {
		if (empty($_POST['subject']) === true) {
			$errors[] = 'Subject is required';
		}
		if (empty($_POST['body']) === true) {
			$errors[] = 'Body is required';
		}
		if (empty($errors) === false) {
			echo output_errors($errors);
		} else {
			// Send Email
			mail_users($_POST['subject'], $_POST['body']);
			echo '<meta http-equiv="refresh" content="0; URL=mail?success">';
			exit();
		}
	}
	?>
	<form action="" method="post">
		<ul>
			<p> 
               <label for="subject" class="uname" data-icon="S">Subject</label>
               <input id="subject" name="subject" required="required" type="text" placeholder="Subject" />
            </p>
			<li>
				<label for="body" class="uname" data-icon="e" > Body </label>
				<textarea id="email" name="body" required="required" type="text" placeholder="Body"></textarea>
			</li>
			<p class="recover buttons"> 
                <input type="submit" value="Send" /> 
			</p>
		</ul>
	</form>
<?php } ?>