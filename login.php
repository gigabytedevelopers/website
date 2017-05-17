<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Hello dear! You need to enter a Username and Password';
	} else if (user_exists($username) === false) {
		$errors[] = 'Sorry We can\'t find that username, Have you registered?';
	} else if (user_active($username) === false) {
		$errors[] = 'You have\'nt activated your account!';
	} else {
		if (strlen($password) > 32) {
			$errors[] = 'Password too long';
		}
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'Sorry dear, that username/password combination is incorrect';
		} else {
			$_SESSION['user_id'] = $login;
			header('Location: loggedin');
			exit();
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <?php include 'includes/headtoheaderenter.php'; ?><!--/head-->
	<?php include_once("includes/googleanalyticstracking.php") ?>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
								<?php
								if (empty($errors) === false) {
								?>
									<h2>We've tried our best to log you in, but...</h2>
								<?php
									echo output_errors($errors);
								}
								?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username" onkeyup="checkname();" value="<?php if(empty($_POST) === false) echo $_POST['username']; ?>" />
                                </p>
                                    <span id="name_status"></span>
						<div class="sminputs">
							<div class="input full">
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" value="<?php if(empty($_POST) === false) echo $_POST['password']; ?>" maxlength="8"/> 
									<span type="button" id="eye" class="hide-password" onclick="if(password.type=='text')password.type='password'; else password.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
									<!-- <span type="button" id="eye" class="hide-password" onmousedown="password.type='text';" onmouseup="password.type='password';" onmouseout="password.type='password';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span> -->
                                </p>
							</div>
						</div>
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
									<a href="register" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
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
<script src="js/index.js"></script>
</html>