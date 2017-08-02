<?php
include 'core/init.php';
protect_page();
global $session_user_id;
?>
<form action="" method="post">
	<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers | Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official Username Recovery Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <meta name="theme-color" content="#028fcc">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
    </head>
    <body>
	<?php include_once("includes/googleanalyticstracking.php") ?>
        <div class="container">
            <header>
                <a href="index"><h1>Gigabyte Developers <span>Search Assistant</h1></a>
            </header>
            <section>				
                <div id="container_demo" >
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
			$query = "SELECT `username`, `first_name`, `last_name`, `email`, `profile` FROM `users` WHERE `username` LIKE '%".((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $search_name) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""))."%'";
			$query_run = mysqli_query($GLOBALS["___mysqli_ston"], $query);
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows>=1) {
				echo $query_num_rows.' results found:<br>';
				while ($query_row = mysqli_fetch_assoc($query_run)) {
					echo '<img src="', $query_row ['profile'], '" alt="Profile Picture">' . ' '?><a href="user/<?php echo $query_row['username']; ?>"><?php echo $query_row['first_name'] . ' ' , $query_row['last_name'].  ''?></a><?php  ''?> (<?php echo $query_row['username']?>)<br/> <?php '' . '<br>';?><?php 
				}
			} else {
				echo 'Sorry! Your search results no matches!';
			}
		} else {
			echo 'Your keyword must be at least 4 characters!';
		}
	}
}