<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta property="og:image" content="https://lh3.googleusercontent.com/-EfxXrt55bqg/AAAAAAAAAAI/AAAAAAAAAAY/95M63UGUuMM/s265-c-k-no/photo.jpg" />
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<meta name="description" content="Official website Contact page of Gigabyte Developers Incorporated">
<meta name="author" content="Gigabyte Developers Incorporated">
<link rel="shortcut icon" href="images/giga.png" height="35" width="32" />
<link rel="shortcut icon" href="images/gigaicon.ico" />
<link href="contactcss/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="contactcss/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="contactcss/hover_pack.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="contactcss/contact-form.css">
<link rel="stylesheet" href="contactcss/style.css">
<script src="contactjs/jquery.js"></script>
<script src="contactjs/jquery-migrate-1.1.1.js"></script>
<script src="contactjs/jquery.easing.1.3.js"></script>
<script src="contactjs/script.js"></script> 
<script src="contactjs/superfish.js"></script>
<script src="contactjs/jquery.equalheights.js"></script>
<script src="contactjs/jquery.mobilemenu.js"></script>
<script src="contactjs/tmStickUp.js"></script>
<script src="contactjs/jquery.ui.totop.js"></script>
<script src="contactjs/TMForm.js"></script>
<script src="contactjs/modal.js"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="contactjs/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="contactcss/ie.css">
<![endif]-->
</head>

<body>
<script type="text/javascript">
window.alert("Please use this Contact Form for only enquiries and service requests!")
</script>
<!--==============================
              header
=================================-->
<div class="page-head">
			<div class="header-nav">
				<div class="logos wow fadeInUp animated" data-wow-delay=".5s">
					<h1>
						<a class="link link--kumya" href="index"><i></i></a>
					</h1>
				</div>
				<div class="top-nav wow fadeInUp animated" data-wow-delay=".5s">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						 <li><a class="active" href="loginform">Sign In</a></li>
						 <li><a href="registerform" data-target="#myModal">Register</a></li>
					  </ul>
				 </div>
				<div class="clearfix"></div>
			</div>
    </div>
<!--=====================
          Content
======================-->
<section id="content">
  <div class="container_12">
    <div class="grid_12">
      <h3 class="ta__center">
        Where to Find Us
      </h3>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15885.369892254239!2d7.489328367024799!3d5.516085470816583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042c334a5b7942b%3A0xf1cad6c310f743d0!2sWorld+Bank+Estate!5e0!3m2!1sen!2sng!4v1466686298378" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>
        <p>24/7 support is on for all <a href="index/#services" rel="nofollow" class="color1 fwn">Services</a>. </p>
        <p>Programmers at <a href="http://facebook.com/gigabytedevsinc" rel="nofollow" class="color1 fwn">Gigabyte Developers Incorporated</a> will help to make sure that your requested services are ready on or before your chosen deadline. Note that all our services are free but payments depend on your desired specifications and the programmer you choose to do your work.</p>
        <p>Want to meet our team of Developers live in person? If yes, Don't hesitate to pay us a visit at our Headquarters using the address below. <br/></p>
        <p>#40 Nnokwa Street, World Bank Housing Estate, Umuahia, Abia State, Nigeria.<br/><br>
        Telephone 1: +234 810 430 9369 <br>
        Telephone 2: +234 701 723 6746 <br>
        E-mail: <a href="#">nwokomaemmanuel@gmail.com</a></p>
		<p class="importantmsg">Note: Our team here at Gigabyte Developers Incorporated are working ceaselessly to satisfy our customers. </p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <article class="block-1 contacts ">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="white ta__center">Contact Form</h3>
      </div>
      <div class="clear"></div>
        <form id="contact-form" action="post">
          <div class="contact-form-loader"></div>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>
           
            <label class="email">
              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
           </div>
           <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <div class="ta__right">
          <button href="#" class="link-1 whites" data-type="reset">Clear</button>
          <button href="#" class="link-1 whites" data-type="submit">Send</button></div>
            </div>
          </div> 

          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>      
              </div>
            </div>
          </div>
          <div class="clear"></div>
      </form>   
      <div class="clear"></div>
    </div>
  </article>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container_12">
    <div class="grid_12"> 
      <div class="socials">
        <a href="http://twitter.com/gigabytedevsinc" class="fa fa-twitter"></a>
        <a href="http://facebook.com/gigabytedevsinc" class="fa fa-facebook"></a>
        <a href="http://plus.google.com/+GigabyteDevelopers" class="fa fa-google-plus"></a>
        <a href="http://pinterest.com/gigabytedevsinc" class="fa fa-pinterest"></a>
		<a href="skype:emmanuel.nwokoma?call" class="fa fa-skype"></a>
		<a href="http://instagram.com/iam_gigabyte" class="fa fa-instagram"></a>
      </div>
      <div class="sub-copy">&copy; <span id="copyright-year"></span> Gigabyte Developers Incorporated. <a href="#">All Rights Resevered</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">Gigabyte Developers Incorporated</a></div>
    </div>
    <div class="clear"></div>
  </div>  
</footer>
</body>
</html>