<?php
include 'core/init.php';
protect_page();
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
		<link rel="shortcut icon" href="images/gigaicon.ico">
		
		<!-- Main Quill library -->
		<script src="//cdn.quilljs.com/1.3.4/quill.js"></script>
		<script src="//cdn.quilljs.com/1.3.4/quill.min.js"></script>

		<!-- Theme included stylesheets -->
		<link href="//cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">
		<link href="//cdn.quilljs.com/1.3.4/quill.bubble.css" rel="stylesheet">
    </head>
    <body>
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
               <label for="subject">Subject</label>
               <input id="subject" name="subject" required="required" type="text" placeholder="Subject" />
            </p>
			<p>
				<label for="body"> Body </label>
				<!-- <textarea id="email" name="body" required="required" type="text" placeholder="Body"></textarea> -->
				<div id="editor" name="body">
				  <p><br></p>
				</div>
			</p>
			<p class="recover buttons">
                <input type="submit" value="Send" />
			</p>
		</ul>
	</form>
<?php } ?>
	<script>
	  var toolbarOptions = [
		  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		  ['blockquote', 'code-block'],

		  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
		  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
		  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
		  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
		  [{ 'direction': 'rtl' }],                         // text direction

		  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
		  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

		  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		  [{ 'font': [] }],
		  [{ 'align': [] }],

		  ['clean'],                                         // remove formatting button
		  ['link', 'image']
	];

	var quill = new Quill('#editor', {
		  modules: {
			toolbar: toolbarOptions
		  },
		  theme: 'snow'
	});
	</script>