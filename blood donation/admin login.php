<?php
$db=new PDO('mysql:host=localhost;dbname=bbms','root','');
error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet" href="css/s1.css">
<body>
<div id ="full">
     <div id="inner_full">
<div id ="header"><h2> blood management system </h2></div>
<div id ="body">
<br><br><br>
<form action="" method="POST"
<table align="center">
<tr>
<td width="70px" height="70px"><b> Enter username </b></td>
<td width="50px" height="70px"><input type="text" name="un" placeholder="Enter username" </td> <br>
</tr>
<tr>
<td width="5px" height="50px"><b> Enter password </b></td>
<td width="50px" height="50px"><input type="text" name="ps" placeholder="Enter password" </td><br>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="login">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
	 $un=$_POST['un'];
	  $ps=$_POST['ps'];
	  $q=$db->prepare("select*from admin where uname='$un' && pass='$ps'");
	 $q-> execute();
	  $res=$q->fetchAll(PDO::FETCH_OBJ);
	  if($res)
	  {
		  header ("location:admin-home.php");
	  }
	  else
	  {
		  echo "<script>alert('wrong user')</script>";
	  }
}

?>
<div id ="footer"><h4 align="center">copyright@chandnikukreja</h4></div>
</div>
</div>
</body>
</html>
