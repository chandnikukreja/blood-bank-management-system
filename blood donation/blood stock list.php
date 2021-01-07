<?php
$db=new PDO('mysql:host=localhost;dbname=bbms','root','');
//error_reporting(0);
?>
<html>
<head>

<link rel="stylesheet" href="css/s1.css">
<body>
<div id ="full">
     <div id="inner_full">
<div id ="header"><h2> Blood management system </h2></div>
<div id ="body">

<h1> BLOOD Stock  list </h1>
<table align="center">
<tr>
<td height="50px" width="40px"><center><b><font color="blue">Name </font></b></center></td>
<td height="50px"  width="40px"><center><b><font color="blue">Qty </font></b></center></td>
</tr>
<tr>
<td>O+</td>
<td><center>
<?php
$q=$db->query("SELECT `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mobile number` FROM `donor registration` WHERE bgroup='o+'");
echo $row=$q->rowcount();
?>
</center></td>

</tr>
<tr>
<td>AB+</td>
<td><center>
<?php
$q=$db->query("SELECT `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mobile number` FROM `donor registration` WHERE bgroup='AB+'");
echo $row=$q->rowcount();
?>
</center></td>
</tr>
<td>AB-</td>
<td><center>
<?php
$q=$db->query("SELECT `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mobile number` FROM `donor registration` WHERE bgroup='AB+'");
echo $row=$q->rowcount();
?>
</center></td>
</tr>
</table>
<div id ="footer"><h4 align="center">copyright@chandnikukreja</h4>
<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
</div>
</div>
</div>
</div>