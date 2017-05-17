<?php 
include 'core/init.php';
logged_in_redirect();
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
		echo '<meta http-equiv="refresh" content="0; URL=register?success">';
		exit();
		// exit
	} else if (empty($errors) === false) {
		// output errors
		echo output_errors($errors);
	}
?>
				<style>
					.alert {
						padding: 20px;
						background-color: #2b86ec;
						color: white;
					}
					.closebtn {
						margin-left: 15px;
						color: white;
						font-weight: bold;
						float: right;
						font-size: 22px;
						line-height: 20px;
						cursor: pointer;
						transition: 0.3s;
					}
					.closebtn:hover {
						color: black;
					}
				</style>
					<div class="alert" style="marigin-bottom: 50px;">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<h2 style="text-align: center; font-size: 24px; padding-bottom: 10px;"><strong>Registration Tips!</strong></h2>
						<ul style="list-style-type: disc; padding-left: 20px;">
							<li>Username must not exceed 10 Characters!</li>
							<li style="margin-top: 10px; margin-bottom: 10px;">Password must not exceed 8 Characters!</li>
							<li style="margin-top: 10px; margin-bottom: 10px;">First Name and Last Name must not exceed 32 Characters each!</li>
							<li>Please use an active E-mail address and Phone Number in-order to activate your account after registration!</li>
						</ul>
					</div>
                                <p style="padding-top: 10px;"> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username" value="<?php if(empty($errors) === false) echo $_POST['username']; ?>" maxlength="10"/>
                                </p>								
                                <p> 
                                    <label for="first_name" class="uname" data-icon="fn">Your first name</label>
                                    <input id="first_name" name="first_name" required="required" type="text" placeholder="First Name" value="<?php if(empty($errors) === false) echo $_POST['first_name']; ?>" maxlength="32"/>
                                </p>
								                <p> 
                                    <label for="last_name" class="uname" data-icon="ln">Your last name</label>
                                    <input id="last_name" name="last_name" type="text" placeholder="Surname" value="<?php if(empty($errors) === false) echo $_POST['last_name']; ?>" maxlength="32"/>
                                </p>
                                <p> 
                                    <label for="email" class="youmail" datamail-icon="e" > Your email address</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Email Address" value="<?php if(empty($errors) === false) echo $_POST['email']; ?>" maxlength="255"/>
                                </p>
						<div class="sminputs">
							<div class="input full">
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" value="<?php if(empty($errors) === false) echo $_POST['password']; ?>" maxlength="8"/>
									<span type="button" id="eye" class="hide-password" onclick="if(password.type=='text')password.type='password'; else password.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
                                </p>
							</div>
						</div>
						<div class="sminputs">
							<div class="input full">
                                <p> 
                                    <label for="password_again" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="password_again" name="password_again" required="required" type="password" placeholder="eg. X8df!90EO" value="<?php if(empty($errors) === false) echo $_POST['password']; ?>" maxlength="8"/>
									<span type="button" id="eye" class="hide-password" onclick="if(password_again.type=='text')password_again.type='password'; else password_again.type='text';"><img src="images/eye.png" style="width: 25px; height: 25px; padding-top:5px;"></span>
                                </p>
							</div>
						</div>
								<p>	
								<label class="sex" for="sex">Choose your Gender</label>&nbsp&nbsp&nbsp&nbsp&nbsp
									<select id="sex" name="sex" style="border: 1px solid rgba(91,90,90,0.7); border-radius:5px; box-shadow: 0 1px 4px 0 rgba(168,168,168,0.6) inset; height:30px">
										<option value="Unspecified" selected="selected"><?php if(empty($errors) === false) { echo $_POST['sex']; } else { echo 'Unspecified';} ?></option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</p>
								<p>
								<label class="country" for="country">Select Country of Origin</label>&nbsp&nbsp&nbsp&nbsp&nbsp
									<select id="country" name="country" style="border: 1px solid rgba(91,90,90,0.7); border-radius:5px; box-shadow: 0 1px 4px 0 rgba(168,168,168,0.6) inset; height:30px">
										<option value="Unspecified" selected="selected"><?php if(empty($errors) === false) { echo $_POST['country']; } else { echo 'Unspecified';} ?></option>
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
									<input type="text" name="phonenumber" id="phonenumber" value="<?php if(empty($errors) === false) echo $_POST['phonenumber']; ?>" placeholder="Please enter Phone Number with Country code" maxlength="15">
								</p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="login" class="to_register"> Go and log in </a>
								</p>
							</form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
								<!-- <script>
									$('#country').change(function () {
										var countryCode = $(this).val();
										
										if (countryCode) {
											$('#phonenumber').val(countryCode);
										}
									});
								</script> -->
</html>
<?php 
}
?>