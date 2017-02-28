<?php
include 'core/init.php';
logged_in();

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
        <title>Gigabyte Developers Incorporated | Account Activation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official Registration Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <link rel="shortcut icon" href="../favicon.ico"> 
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
                <a href="index"><h1>Gigabyte Developers Incorporated <span>Account Activation</span></h1></a>
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
                            <form  action="" method="post" autocomplete="on"> 
<?php 

if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	</br><p><h2 class="textmode">Thanks! We've activated your account...</h2></p>
	<p class="textmode">You're free to <a href="loginform">login!</a></P>
	<p class="textmode">Don't forget to click Profile Picture in your Profile Menu so as to update/change your profile picture</P>
<?php
} else if (isset($_GET['email'], $_GET['email_code']) === true) {
	$email = trim($_GET['email']);
	$email_code = trim($_GET['email_code']);

	if (email_exists($email) === false) {
		$errors[] = 'Something went wrong and we couldn\'t find that email address! Please crosscheck your confirmation/activation link and try again.';
	} else if (activate($email, $email_code) === false) {
		$errors[] = 'Sorry, we had problems activating your account. Please crosscheck your confirmation/activation link and try again!';
	}
	
	if (empty($errors) === false) {
		?>
			<h2>Oops...</h2>
		<?php
			echo output_errors($errors);
	} else {
		header('Location: activate?success');
	}
	
} else {
	header('Location: index');
	exit();
}

?>
					</div>
                </div>  
            </section>
        </div>
    </body>
</html>