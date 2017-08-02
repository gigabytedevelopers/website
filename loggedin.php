<?php
include 'core/init.php';  
protect_page();
global $session_user_id;
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?><!--/head-->
<body>
	<div id="fb-root"></div>
<noscript>
    <p><div class="fa fa-warning" style="font-size: 20px; display: block; color: red; text-align: center;">Awww! Snap! Looks like you don't have JavaScript enabled. Please enable JavaScript in your browser, and then reload this page.</div></p>
    <p><a href="loggedin-noJS" style="font-size: 20px; display: block; color: green; text-align: center;">Click Here to view our non-JS compatible version.</a></p>
</noscript>
  <?php include 'includes/loggedinheader.php'; ?><!--/#home-->
<?php
/*if (is_admin($session_user_id, 1) === true) {
	echo 'Hello Admin!';
} else if (has_access($session_user_id, 2) === true) {
	echo 'Hello Moderator!';
}*/
?>
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
<!--<script type="text/javascript">
  if (screen.width <= 480) {
    window.location = "loggedinonmobile";
  }
</script>-->
  <!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=96584980"></script>
<!-- <script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
$(function () {
    $('div').slice(0, 3).show();
    $('#loadMore').on('click', function (e) {
        e.preventDefault();
        $('div:hidden').slice(0, 3).slideDown();
        if ($('div:hidden').length == 0) {
            $('#load').fadeOut('slow');
        }
        $('html,body').animate({ scrollTop: $(this).offset().top }, 1500);
    });
});
$('a[href=#top]').click(function () {
    $('body,html').animate({ scrollTop: 0 }, 600);
    return false;
});
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
</script> -->
</body>
</html>