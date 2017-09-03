<?php
include 'core/init.php';
logged_in();
global $session_user_id;
?><!DOCTYPE html><html lang=en><title>Gigabyte Developers Incorporated | Contact Us</title><meta content=https://www.gigabytedevelopersinc.com/images/thumbnail.png property=og:image:secure_url><meta content=website property=og:type><meta content="Gigabyte Developers Incorporated"property=og:site_name><meta content="Gigabyte Developers Incorporated | Contact Us"property=og:title><meta content="Customer Support page of Gigabyte Developers Incorporated"property=og:description><meta charset=utf-8><meta content="telephone=no"name=format-detection><meta content="width=device-width,initial-scale=1,maximum-scale=1"name=viewport><meta content="Customer Support page of Gigabyte Developers Incorporated"name=description><meta content=#028fcc name=theme-color><meta content="Gigabyte Developers Incorporated"name=author><link href=images/giga.png rel="shortcut icon"height=35 width=32><link href=images/gigaicon.ico rel="shortcut icon">
	<link href="assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen"><?php include_once("includes/googleanalyticstracking.php") ?><div id=container><div class="navbar-fixed-top page-head"><div><div class="animated fadeInUp wow logos"data-wow-delay=.5s><h1><a href=index class="link link--kumya"><i></i></a></h1></div><div class="animated fadeInUp wow top-nav"data-wow-delay=.5s><label class=mobile_menu for=mobile_menu><span>Menu</span></label><input id=mobile_menu type=checkbox><ul class=nav><li><?php if (logged_in() === true && empty($user_data['profile']) === false) { echo '<a href="user/', $user_data['username'],'"><img src="', $user_data ['profile'], '" style="width:32px;text-transform:uppercase;float:left;margin-top:2px;margin-left:-40px;">', '<a href=user/', $user_data['username'],' class=active style="color:#ffffff;font-size:14px;font-weight:600;padding-bottom:30px;margin-top:-10px;text-transform:uppercase;"> Hello,&nbsp', $user_data ['username'],'</a>'; } else { echo '<a href=login class=active><b>Sign In</b></a><li><a href=register data-target=#myModal><b>Register</b></a>'; }?></ul></div></div></div><div class=page-header style="margin-top:150px;"><div class=container><div class=row><div class="col-md-12 ta__center"style="font-size:48px;font-family:'Albert Text',sans-serif;font-style:normal;font-weight:700;line-height:52px;color:#028fcc"><h1 style=font-size:42px>Gigabyte Developers Incorporated</h1></div></div></div></div><section id=content><div class=container><div class=row><div class=col-md-9><h2>Contact Form</h2><form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <button type="submit" id="submit" class="btns btns-success"></i> Send Message</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"  style="padding-bottom: 20px;"></div>   

            </form></div><div class=col-md-3><h2 class=big-title>Contact Info</h2><div class=information><div class=contact-datails><p>40, Nnokwa Street, World Bank Housing Estate, Umuahia, Abia State, Nigeria.<p>+234 810 430 9369<p>+234 701 723 6746<p>+234 815 857 6171<p>nwokomaemmanuel@gmail.com<p>Mon-Fri (8am-9pm)<p>Sat-Sun (6pm-10pm)</div></div></div><div class=col-md-12><h1 style=font-size:48px;font-family:Marvel,sans-serif;font-style:normal;font-weight:700;line-height:52px;color:#028fcc class=ta__center>Where To Find Us</h1><div class=map><iframe allowfullscreen frameborder=0 height=450 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7942.731411890625!2d7.491267931990267!3d5.512613535618069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042c333100c0991%3A0xfe612f5a335d5101!2sGigabyte+Developers+Incorporated!5e0!3m2!1sen!2sng!4v1493077965966"style=width:100%;border:0 width=100%></iframe><p style=font-size:16px>24/7 support is on for all <a href=index#services class="color1 fwn"rel=nofollow>Services</a>.<p style=font-size:16px>Programmers at <a href=https://facebook.com/gigabytedevelopersinc class="color1 fwn"rel=nofollow target=_blank>Gigabyte Developers Incorporated</a> will help to make sure that your requested services are ready on or before your chosen deadline. Note that all our services are free but payments depend on your desired specifications and the programmer you choose to do your work.<p style=font-size:16px>Want to meet our team of Developers live in person? If yes, Don't hesitate to pay us a visit at our Headquarters using the address below.<br><p style=font-size:16px>#40, Nnokwa Street, World Bank Housing Estate, Umuahia, Abia State, Nigeria.<br><br>Telephone 1: +234 810 430 9369<br>Telephone 2: +234 701 723 6746<br>Telephone 3: +234 815 857 6171<br>E-mail: <a href=mailto:nwokomaemmanuel@gmail.com>nwokomaemmanuel@gmail.com</a><p style=font-size:16px class=importantmsg>Note: Our team here at Gigabyte Developers Incorporated are working ceaselessly to satisfy our customers.</div></div></div></section></div><div class=clearfix></div><footer id=footer><div class=container_12><div class=grid_12><div class=socials><a href=http://twitter.com/gigabytedevsinc class="fa fa-twitter"></a> <a href=http://facebook.com/gigabytedevsinc class="fa fa-facebook"></a> <a href=http://plus.google.com/+GigabyteDevelopers class="fa fa-google-plus"></a> <a href=http://pinterest.com/gigabytedevsinc class="fa fa-pinterest"></a> <a href=skype:emmanuel.nwokoma?call class="fa fa-skype"></a> <a href=http://instagram.com/gigabytedevelopersinc class="fa fa-instagram"></a></div><div class=sub-copy>© <span id=copyright-year></span> Gigabyte Developers Incorporated. All Rights Resevered<br>Website designed by <a href=http://www.templatemonster.com/ rel=nofollow><b>Gigabyte Developers Incorporated</b></a></div></div><div class=clear></div></div></footer><script>window.alert("Please use this Contact Form for only enquiries and service requests!")</script>
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>  
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script><script>$(window).load(function(){$().UItoTop({easingType:"easeOutQuart"}),$("#stuck_container").tmStickUp({})})</script>