<?php
$connect_error = 'Sorry, We are experiencing connection problems here at Gigabyte Developers. So, please try again later. Thank You!';
($GLOBALS["___mysqli_ston"] = mysqli_connect('localhost',  'root',  '', 'gigabytedevelopers')) or die($connect_error);
?>