<?php
session_start();
$un=$_SESSiON['un'];
unset($un);
header("location:admin login.php");
?>