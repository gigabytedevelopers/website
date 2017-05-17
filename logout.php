<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index"); // Redirecting To Home Page
}
?>