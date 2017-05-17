<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?><!--/head-->
<body style="max-width:100%">
<?php include_once("includes/googleanalyticstracking.php") ?>
	<div id="fb-root"></div>
<noscript>
	<p><div class="fa fa-warning" style="font-size: 20px; margin-right: 30px; color: red;">To view our website properly, we urge you to please enable JavaScript in your browser, and then reload this page.</div></p>
</noscript>
  <?php include 'includes/header.php'; ?><!--/#home-->
  <?php include 'includes/servicesection.php'; ?><!--/#services-->
  <?php include 'includes/about-us_section.php'; ?><!--/#about-us-->
  <?php include 'includes/portfoliosection.php'; ?><!--/#portfolio-->
  <?php include 'includes/teamsection.php'; ?><!--/#team-->
  <?php include 'includes/featuresection.php'; ?><!--/#pricing-->
  <?php include 'includes/twittersection.php'; ?><!--/#twitter-->
  <?php include 'includes/blogsection.php'; ?><!--/#blog-->
	<!-- ==== GREYWRAP ==== --> <?php include 'includes/greywrapcontainer.php'; ?> <!-- greywrap -->
  <?php include 'includes/contactsection.php'; ?><!--/#contact-->
	<?php include 'includes/partner-to-end.php'; ?><!-- container -->
  <?php include 'includes/footer.php'; ?>
  <script type="text/javascript">
  <!--
  if (screen.width <= 720) {
    window.location = "http://gigabytedevelopersinc.com/mobile";
  }
  //-->
  </script>
  <!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/mousescroll.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=96584980"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>