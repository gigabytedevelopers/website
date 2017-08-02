<?php
include 'core/init.php';
logged_in_redirect();
global $session_user_id;
?><!DOCTYPE html>
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
<a href="https://mylivechat.com/chatnoscript.aspx?HCCID=96584980" title="" target="_blank">Click to chat</a>
</body>
</html>