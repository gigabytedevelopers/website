<?php
$connect_error = 'Sorry, We are experiencing connection problems here at Gigabyte Developers. So, please try again later. Thank You!';
mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('loginregister') or die($connect_error);
?>