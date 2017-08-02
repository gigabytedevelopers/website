<?php
include 'core/init.php';
protect_page();
global $session_user_id;
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?><!--/head-->
<body>
  <?php include_once("includes/googleanalyticstracking.php") ?>
  <?php include 'includes/mobileloggedinheader.php'; ?><!--/#home-->
    <?php
    /*if (is_admin($session_user_id, 1) === true) {
        echo 'Hello Admin!';
    } else if (has_access($session_user_id, 2) === true) {
        echo 'Hello Moderator!';
    }*/
    ?>
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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->
  <div class=col-lg-6 style="text-decoration:none;float:right;margin-right:10px;"><a href="https://mylivechat.com/chatnoscript.aspx?HCCID=96584980" title="" target="_blank" style="text-decoration:none;float:right;margin-top:-5px;margin-bottom:5px;">Click to chat</a></div>
</body>
</html>