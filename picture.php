<?php
include 'core/init.php';
protect_page();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers | Update Profile Picture</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <meta name="theme-color" content="#028fcc">
        <link rel="shortcut icon" href="images/gigaicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
	<?php include_once("includes/googleanalyticstracking.php") ?>
        <div class="container">
            <header>
                <a href="index"><h1>Gigabyte Developers <span>Edit Profile Picture</h1></a>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
?>
<h1>Update Profile Picture</h1>
<?php
if (isset($_FILES['profile']) === true) {
	if (empty($_FILES['profile']['name']) === true) {
		echo 'Please choose a file';
	} else {
		$allowed = array('jpg', 'jpeg', 'png');
		$file_name = $_FILES['profile']['name'];
		$file_extn = strtolower(end(explode('.', $file_name)));
		$file_temp = $_FILES['profile']['tmp_name'];
		if (in_array($file_extn, $allowed) === true) {
			change_profile_image($session_user_id, $file_temp, $file_extn);
			echo 'Your profile picture has been updated';
		} else {
			echo 'Invalid picture format allowed:';
			echo implode(', ', $allowed);
		}
	}
}
?>
	<form action="" method="post" enctype="multipart/form-data">
			<p>
				<label for="profile" class="profile" gigabyte-icon="fa-picture" >Update Picture  Picture</label>
				<input type="file" name="profile" id="files" value="Select a valid picture" placeholder="Select a valid picture">
				<p style="text-align: center;"><img id="image" style="padding-top: 10px; width: 50px; height: 50px;"></p>
			</p>
			<p class="recover buttons">
				<input type="submit" value="Update Profile Picture">
			</p>
	</form>
	<script type="text/javascript">
		document.getElementById("files").onchange = function () {
			var reader = new FileReader();

			reader.onload = function (e) {
				//get user's loaded image and render a thumbnail.
				document.getElementById("image").src = e.target.result;
			};

			// read the loaded image file as a data URL.
			reader.readAsDataURL(this.files[0]);
		};
	</script>