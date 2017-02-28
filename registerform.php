<?php 
include 'core/init.php';
logged_in_redirect();
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
        <title>Gigabyte Developers Incorporated | Registration</title>
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
                            <form  action="" method="post" autocomplete="on"> 
                                <h1> Sign up </h1> 
<?php


if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Hello! The fields marked with an asterisk are required';
			break 1;
		}
	}

	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, that username \'' . $_POST['username'] . '\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) === true) {
			$errors[] = 'Your username must not contain any spaces.';
		}
		if (strlen($_POST['username']) > 10) {
			$errors[] = 'Your username must contain not more than 10 characters';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Your passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email is required';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?><p class="textmode"><?php echo 'Yov\'ve been registered successfully! Please check your email to activate your account'; ?></p><?php
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		// register user
		$register_data = array(
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email'],
			'country' 		=> $_POST['country'],
			'phonenumber' 	=> $_POST['phonenumber'],
			'sex' 			=> $_POST['sex'],
			'email_code' 	=> md5($_POST['username'] + microtime())
		);
		register_user($register_data);
		// redirect
		header('Location: registerform?success');
		exit();
		// exit
	} else if (empty($errors) === false) {
		// output errors
		echo output_errors($errors);
	}
?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username" value="<?php if(empty($errors) === false) echo $_POST['username']; ?>" />
                                </p>								
                                <p> 
                                    <label for="first_name" class="uname" data-icon="fn">Your first name</label>
                                    <input id="first_name" name="first_name" required="required" type="text" placeholder="First Name" value="<?php if(empty($errors) === false) echo $_POST['first_name']; ?>" />
                                </p>
								                <p> 
                                    <label for="last_name" class="uname" data-icon="ln">Your last name</label>
                                    <input id="last_name" name="last_name" type="text" placeholder="Surname" value="<?php if(empty($errors) === false) echo $_POST['last_name']; ?>" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Your email address</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Email Address" value="<?php if(empty($errors) === false) echo $_POST['email']; ?>" />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" value="<?php if(empty($errors) === false) echo $_POST['password']; ?>"/>
                                </p>
                                <p> 
                                    <label for="password_again" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="password_again" name="password_again" required="required" type="password" placeholder="eg. X8df!90EO" value="<?php if(empty($errors) === false) echo $_POST['password']; ?>"/>
                                </p>
								</p>	
								<label class="sex" for="sex">Choose your Gender</label>&nbsp&nbsp&nbsp&nbsp&nbsp
									<select id="sex" name="sex">
										<option value="Unspecified" selected="selected"><?php if(empty($errors) === false) { echo $_POST['sex']; } else { echo 'Unspecified';} ?></option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</p>
								<p>
								<label class="country" for="country">Select Country of Origin</label>&nbsp&nbsp&nbsp&nbsp&nbsp
									<select id="country" name="country">
										<option value="" selected="selected" ><?php if(empty($errors) === false) echo $_POST['country']; ?></option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina">Burkina</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Central African Rep">Central African Rep</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo (Democratic Rep)">Congo (Democratic Rep)</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Ivory Coast">Ivory Coast</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Haiti">Haiti</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Honduras">Honduras</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland (Republic)">Ireland (Republic)</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="South Korea">South Korea</option>
										<option value="Kosovo">Kosovo</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar, Burma">Myanmar, Burma</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="West Bank / Palestinian Territory">West Bank / Palestinian Territory</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="Saint Martin">Saint Martin</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="South Sudan">South Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="East Timor">East Timor</option>
										<option value="Togo">Togo</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
										</select>
								</p>
								<p>
									<label for="phonenumber" class="youpasswd" datas-icon="fa-phone">Phone Number </label>
									<input type="text" name="phonenumber" value="<?php if(empty($errors) === false) echo $_POST['phonenumber']; ?>" placeholder="Please enter Phone Number with Country code">
								</p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="loginform" class="to_register"> Go and log in </a>
								</p>
							</form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php 
}
?>