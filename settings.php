<?php
include 'core/init.php';
protect_page();
	function email_existing($email) {
}

if (empty($_POST) === false) {
	$required_fields = array('first_name', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Hello! The fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email address is required';
		} else if (email_existing($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Gigabyte Developers Incorporated | Update Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/gigaicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
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
                <a href="index"><h1>Gigabyte Developers Incorporated</h1></a>
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
<h1>Update Profile</h1>

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
			header('Location: settings?success');
			exit();
			
		} else {
			echo 'Invalid picture format allowed:';
			echo implode(', ', $allowed);
		}
	}
}

if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?><p class="textmode"><?php echo 'Your details has been successfully updated';?></p><?php
} else {

	if (empty($_POST) === false && empty ($errors) === true) {
		
		// update user details
		$update_data = array(
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email'],
			'allow_email'	=> ($_POST['allow_email'] == 'on') ? 1 : 0,
			'country' 		=> $_POST['country'],
			'phonenumber' 	=> $_POST['phonenumber'],
			'sex' 			=> $_POST['sex']
		);
		
		update_user($session_user_id, $update_data);
		header('Location: settings?success');
		exit();
		
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
	?>

	<form action="" method="post" enctype="multipart/form-data">
			<p>
				<label for="first_name" class="youpasswd" data-icon="fn">First Name </label>
				<input type="text" name="first_name" required="required" value="<?php echo $user_data['first_name']; ?>" placeholder="Enter your Firstname">
			</p><p>
			<p>
				<label for="last_name" class="youpasswd" data-icon="ln">Last Name </label>
				<input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>" placeholder="Enter your Surname/Lastname">
			</p>
			<p>
				<label for="email" class="youpasswd" data-icon="e">Email </label>
				<input type="text" name="email" required="required" value="<?php echo $user_data['email']; ?>" placeholder="Enter your email address">
			</p><br>
			<p>
			<label class="country" for="country">Add/Change your Country</label>&nbsp&nbsp&nbsp&nbsp&nbsp
				<select id="country" name="country">
					<option value="" selected="selected"><?php echo $user_data['country']; ?></option>
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
				<input type="text" name="phonenumber" value="<?php echo $user_data['phonenumber']; ?>" placeholder="Please enter Phone Number with Country code">
			</p>	
			<label class="sex" for="sex">Add/Change your Gender</label>&nbsp&nbsp&nbsp&nbsp&nbsp
				<select id="sex" name="sex">
					<option value="Unspecified" selected="selected"><?php echo $user_data['sex']; ?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</p>
			<p>
				<input type="checkbox" name="allow_email" <?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?>> Would you like to recieve emails from us?
			</p>
			<p class="recover buttons">
				<input type="submit" value="Update Profile">
			</p>
	</form>
<?php
}
include 'includes/overall/overallfooter.php';
?>
