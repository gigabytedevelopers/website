<?php
include 'core/init.php';
protect_page();

if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username 		= $_GET['username'];

	if (user_exists($username) === true) {
	$user_id 		= user_id_from_username($username);
	$profile_data 	= user_data($user_id, 'username', 'first_name', 'last_name', 'email', 'profile', 'country', 'phonenumber', 'sex');
	$file_path = $user_data ['profile'];
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
        <title>Gigabyte Developers Incorporated | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Official User Profile Page of Gigabyte Developers Incorporated" />
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
                <a href="../index.php"><h1>Gigabyte Developers Incorporated <span>User Profile</span></h1></a>
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
<?php
	?>
		<h1><?php echo $profile_data['first_name']; ?>'s Profile</h1>
		<p><?php echo '<img class="profile-center", src="../',  $profile_data['profile'], '" alt="">'; ?></p>
		<p>Username: <?php echo $profile_data['username']; ?></p>
		<p>Gender: <?php if ($profile_data['sex'] == true) { echo $profile_data['sex']; } else { echo 'Unspecified'; }?></p>
		<p>Email: <?php echo $profile_data['email']; ?></p>
		<p>First Name: <?php echo $profile_data['first_name']; ?></p>
		<p>Last Name: <?php echo $profile_data['last_name']; ?></p>
		<p>Nationality: <?php if ($profile_data['country'] == true) { echo $profile_data['country']; } else { echo 'None'; }?></p>
		<p>Phone Number: <?php if ($profile_data['phonenumber'] == true) { echo $profile_data['phonenumber']; } else { echo 'Not Yet Specified'; }?></p>
	<?php
	} else {
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
        <title>Gigabyte Developers Incorporated | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Official User Profile Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
    </head>
    <body>
        <div class="container">
            <header>
                <a href="../index.php"><h1>Gigabyte Developers Incorporated </h1></a>
            </header>
            <section>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
?>
	<h1><?php echo 'Dead End!';?></h1>
	<p class="textmode"> Sorry, this user (<?php $username ?>) isn't registered on our database. Please try again!</p>
	<p class="textmode"> If this problem persists and you are very sure of what you are doing, then head straight to contact our hotline by calling +2348104309369, or email: <a href="mailto:nwokomaemmanuel@gmail.com"> Administrator</a>. </p>
<?php
	}
}

include 'includes/overall/overallfooter.php'; ?>
