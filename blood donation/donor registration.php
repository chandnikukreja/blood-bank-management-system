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

<h1> Donor registration </h1>
<center><div id="form">
<form action="" method="POST">
<table>
<tr>
<td> Enter name </td>
<td><input type="text" name="name" placeholder="Enter Name""></td>
<td> Enter Father's Name  </td>
<td><input type="text" name="fname" placeholder="Enter  Father's Name"></td>
</tr>
<tr>
<td> Enter Address </td>
<td><input type="text" name="address" placeholder="Enter address"></td>
<td> Enter city  </td>
<td><input type="text" name="city" placeholder="Enter city "></td>
</tr>
<tr>
<td> Enter age </td>
<td><input type="text" name="age"  placeholder="Enter age"></td>
</tr>
<tr>
<td> Enter Email </td>
<td><input type="text" name="email" placeholder="Enter email"></td>
<td>  mobile number  </td>
<td><input type="text" name="mobilenumber" placeholder="Enter mobile number "></td>
</tr>
<tr>
<td align="center"><input type="submit" name="submit" value="signup"></td>
</tr>

</table>
</form>
fdbdf
<?php
if(isset($_POST['submit']))
 {
	 $name=$_POST['name'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$city=$_POST['city'];
$age=$_POST['age'];
$mobilenumber=$_POST['mobilenumber'];
$email=$_POST['email'];
 $q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age, mobilenumber, email)VALUES(:name,:fname,:address,:city,:age, :mobilenumber, :mobilenumber)");
 $q->bindValue('name', $name);
 $q->bindValue('fname', $fname);
 $q->bindValue('address', $address);
 $q->bindValue('city', $city);
 $q->bindValue('mobilenumber', $mobilenumber);
 $q->bindValue('email', $email);
$q->execute();
 }
 ?>
<div id ="footer"><h4 align="center">copyright@chandnikukreja</h4>
<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
</div>
</div>
</div>

</html>
