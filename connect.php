<?php


	$con = mysqli_connect("localhost","root","","registration");

	if(mysqli_connect_errno())
	{
		echo "Error occured while connecting to database ".mysqli_connect_errno();
	}

?>