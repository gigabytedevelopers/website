<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
?>
<!DOCTYPE html>
<?php include 'includes/head.php'; ?><!--/head-->
<body>
  <?php include_once("includes/googleanalyticstracking.php") ?>
  <?php include 'includes/mobileheader.php'; ?><!--/#home-->
  <?php include 'includes/mobileservicesection.php'; ?><!--/#services-->
  <?php include 'includes/mobileabout-us_section.php'; ?><!--/#about-us-->
  <?php include 'includes/mobileportfoliosection.php'; ?><!--/#portfolio-->
  <?php include 'includes/teamsection.php'; ?><!--/#team-->
  <?php include 'includes/mobilefeaturesection.php'; ?><!--/#pricing-->
  <?php include 'includes/mobiletwittersection.php'; ?><!--/#twitter-->
  <?php include 'includes/mobileblogsection.php'; ?><!--/#blog-->
  <?php include 'includes/mobilegreywrapcontainer.php'; ?> <!-- greywrap -->
  <?php include 'includes/mobilecontactsection.php'; ?><!--/#contact-->
	<?php include 'includes/mobilepartner-to-end.php'; ?><!-- container -->
<?php include 'includes/mobilefooter.php'; ?>
<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->
<!-- <script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "js/bootstrap.min.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script> -->
</body>
</html>