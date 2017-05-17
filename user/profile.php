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
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers Incorporated | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official User Profile Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <meta name="theme-color" content="#028fcc">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
    </head>
    <body>
        <div class="container">
            <header>
                <a href="../index.php"><h1>Gigabyte Developers Incorporated <span>User Profile</span></h1></a>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
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
	<p class="textmode"> Sorry, this user (<b>"<?php echo $_GET['username'] ?>"</b>) isn't registered on our database. Please try again!</p>
	<p class="textmode"> If this problem persists and you are very sure of what you are doing, then head straight to contact our hotline by calling +2348104309369, or email: <a href="mailto:nwokomaemmanuel@gmail.com"> Administrator</a>. </p>
<?php
	}
}
 
include 'includes/overall/overallfooter.php'; ?>
