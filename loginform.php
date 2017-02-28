<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
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
        <title>Gigabyte Developers Incorporated | Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Official Registration Page of Gigabyte Developers Incorporated" />
        <meta name="keywords" content="php, ajax, javascript, jquery, aspx, python, html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Gigabyte Developers Incorporated" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="shortcut icon" href="images/gigaicon.ico">
<script type="text/javascript">
function checkname()
{
 var name=document.getElementById( "username" ).value;
    
 if(name)
 {
  $.ajax({
  type: 'post',
  url: '../classes/checkdata.php',
  data: {
   username:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")   
   {
    return true;    
   }
   else
   {
    return false;   
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}

function checkemail()
{
 var email=document.getElementById( "email" ).value;
    
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'classes/checkdata.php',
  data: {
   email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")   
   {
    return true;    
   }
   else
   {
    return false;   
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}

</script>
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
                <a href="index"><h1>Gigabyte Developers Incorporated <span>Registration and Login Section</span></h1></a>
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
                            <form  action="login" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username" onkeyup="checkname();" />
                                </p>
                                    <span id="name_status"></span>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
								<p>
									Forgot <a href="recover?mode=username">username</a> or <a href="passwordrecover?mode=password">password</a>?
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="registerform" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <!-- <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username" />
                                </p>
								<p> 
                                    <label for="first_name" class="uname" data-icon="fn">Your first name</label>
                                    <input id="first_name" name="first_name" required="required" type="text" placeholder="First Name" />
                                </p>
								<p> 
                                    <label for="last_name" class="uname" data-icon="ln">Your last name</label>
                                    <input id="last_name" name="last_name" type="text" placeholder="Surname" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Your email address</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Email Address"/> 
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="password_again" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="password_again" name="password_again" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div> -->
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>