<?php
$db=new PDO('mysql:host=localhost;dbname=bbms','root','');
?>
<html>
<head>

<link rel="stylesheet" href="css/s1.css">
<body>
<div id ="full">
     <div id="inner_full">
<div id ="header"><h2> Blood management system </h2></div>
<div id ="body">

<h1 align="top"> welcome Admin </h1>
<ul>
<li><a href="donor_registration.php">Donor registration </a></li>
<li><a href="">Donor list </a></li>
<li><a href="blood stock list.php">stock blood list </a></li>
</ul>
<br>
<br>
<div id ="footer"><h4 align="center">copyright@chandnikukreja</h4>
<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
</div>
</div>
</div>
</div>