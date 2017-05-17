<?php
$connect_error = 'Sorry, We are experiencing connection problems here at Gigabyte Developers. So, please try again later. Thank You!';
mysql_connect('localhost', 'gigabytedevsinc', 'Doc.d.doc') or die($connect_error);
mysql_select_db('gigabyte_main') or die($connect_error);
?>