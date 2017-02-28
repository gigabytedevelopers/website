<?php
include 'core/init.php';
protect_page();
admin_protect();
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
        <title>Gigabyte Developers Incorporated | No Access</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official User Page of Gigabyte Developers Incorporated" />
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
                <a href="index"><h1>Gigabyte Developers Incorporated </h1></a>
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
			header('Location: mail?success');
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

<?php 
}
include 'includes/overall/overallfooter.php'; ?>
