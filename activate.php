<?php
include 'core/init.php';
logged_in();
?>
	<!DOCTYPE html>
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
            <header>
                <a href="index"><h1>Gigabyte Developers Incorporated <span>Account Activation</span></h1></a>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post" autocomplete="on"> 
<?php 
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	</br><p><h2 class="textmode">Thanks! We've activated your account...</h2></p>
	<p class="textmode">You're free to <a href="login">login!</a></P>
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
		echo '<meta http-equiv="refresh" content="0; URL=activate?success">';
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