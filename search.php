<?php
include 'core/init.php';
protect_page();
global $session_user_id;
?>


<form action="" method="post">
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
        <title>Gigabyte Developers Incorporated | Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official Username Recovery Page of Gigabyte Developers Incorporated" />
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
                <a href="index"><h1>Gigabyte Developers Incorporated <span>Search Assistant</h1></a>
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

<h1>Search</h1>
		<form action="" method="post">
					<p> 
                        <label for="email" class="uname" data-icon="u" >Search here by Username </label>
                        <input id="email" name="search_name" required="required" type="text" placeholder="Search"/>
                    </p> 
				<p class="recover buttons"> 
                    <input type="submit" value="Search" /> 
				</p>
			</form>
			
<?php
if (isset($_POST['search_name'])) {
	$search_name = $_POST['search_name'];
	if (!empty($search_name)) {
		
		if (strlen($search_name)>=1) {
		
			$query = "SELECT `username`, `first_name`, `last_name`, `email`, `profile` FROM `users` WHERE `username` LIKE '%".mysql_real_escape_string($search_name)."%'";
			$query_run = mysql_query($query);
			
			$query_num_rows = mysql_num_rows($query_run);
			
			if ($query_num_rows>=1) {
				echo $query_num_rows.' results found:<br>';
				while ($query_row = mysql_fetch_assoc($query_run)) {
					echo '<img src="', $query_row ['profile'], '" alt="">' . ' '?><a href="user/<?php echo $query_row['username']; ?>"><?php echo $query_row['first_name'] . ' ' , $query_row['last_name'].  ''?></a><?php  ''?> (<?php echo $query_row['username']?>)<br/> <?php '' . '<br>';?><?php 
				}
				
			} else {
				echo 'Sorry! Your search results no matches!';
			}
		} else {
			echo 'Your keyword must be at least 4 characters!';
		}
	}
}