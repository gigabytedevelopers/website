<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?><!--/head-->
<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="78d88854-5cb0-4e9b-aa31-8fc2777a9586";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
<body class="demo-2">
<?php include_once("includes/googleanalyticstracking.php") ?>
	<div id="fb-root"></div>
<noscript>
    <marquee direction="left" scrollamount="10"><p><div class="fa fa-warning" style="font-size: 20px; display: block; color: red; text-align: center;">Awww! Snap! Looks like you don't have JavaScript enabled. Please enable JavaScript in your browser, and then reload this page.</div></p></marquee>
    <p><a href="index-noJS" style="font-size: 20px; display: block; color: green; text-align: center;">Click Here to view our non-JS compatible version.</a></p>
    <!-- <marquee direction="left" scrollamount="9">Hello</marquee> -->
    <style>#ip-container{display:none}</style>
</noscript>
  <?php include 'includes/preloader.php'; ?><!--PreLoader-->
  <?php include 'includes/header.php'; ?><!--/#home-->
  <?php include 'includes/servicesection.php'; ?><!--/#services-->
  <?php include 'includes/about-us_section.php'; ?><!--/#about-us-->
  <?php include 'includes/portfoliosection.php'; ?><!--/#portfolio-->
  <?php include 'includes/teamsection.php'; ?><!--/#team-->
  <?php include 'includes/featuresection.php'; ?><!--/#pricing-->
  <?php include 'includes/twittersection.php'; ?><!--/#twitter-->
  <?php include 'includes/blogsection.php'; ?><!--/#blog-->
  <?php include 'includes/greywrapcontainer.php'; ?> <!-- greywrap -->
  <?php include 'includes/contactsection.php'; ?><!--/#contact-->
  <?php include 'includes/partner-to-end.php'; ?><!-- container -->
  <?php include 'includes/footer.php'; ?>
</div>
  <script type="text/javascript">
  <!--
  if (screen.width <= 360) {
    window.location = "mobile";
  }
  //-->
  /* function refreshPage() {
	  var page_y = document.getElementsByTagName("body")[0].scrollTop;
	  window.location.href = window.location.href.split('?')[0] + '?page_y=' + page_y
  }
  window.onload = function () {
	  setTimeout(refreshPage, 35000);
	  if (window.location.href.indexOf('page_y') != -1) {
		  var match = window.location.href.split('?')[1].split("&")[0].split("=");
		  document.getElementsByTagName("body")[0].scrollTop = match[1];
	  }
  } */
  </script>
  <!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=96584980"></script>
<!-- <script type="text/javascript">
function loadDoc() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("ajax").innerHTML = this.reponseText;
		}
	};
	xhttp.open("GET", "login.php", true);
	xhttp.send();
}
</script>
<script type="text/javascript">
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