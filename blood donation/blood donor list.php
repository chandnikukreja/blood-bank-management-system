<?php
$user='root';
$password="";
$database="bbms";
$host='localhost';
$conn = mysqli_connect($host,$user,$password,$database);
error_reporting(0);
?>
<html>
<head>

<link rel="stylesheet" href="css/s1.css">
<style type="text/css">
td
{
	width:200px;
	height:50px;
}
</style>
<body>
<div id ="full">
     <div id="inner_full">
<div id ="header"><h2> Blood management system </h2></div>
<div id ="body">

<h1> Blood donor list </h1>
	
<?php

$query="select * from  donor registration ";
$run=mysqli_query($conn,$query);
 $total= mysqli_num_rows($run);
 if($total !=0 )
 {
	echo  "<table>";
echo "<tr>";
echo "<th> name </th>";
echo "<th> father's name </th>";
echo "<th> address </th>";
echo "<th> city </th>";
echo "<th> age </th>";
echo "<th> bloodgroup </th>";
echo "<th> email </th>";
echo "<th> mobilenumber </th>";
echo "</tr>";
	 while($result = mysqli_fetch_assoc($run))
	 {
	echo "<tr>";
	echo  "<td>". $result['name']. "</td>";
	echo "<td>".$result['fname']. "</td>";
	 echo"<td>".$result['address']." </td>";
	echo "<td>".$result['city']." </td>";
	echo "<td>".$result['age']." </td>";
	 echo "<td>".$result['bloodgroup']." </td>";
	 echo "<td>	". $result['email']."</td>";
	 echo  "<td>	". $result['mobilenumber']."</td>";
	 }
	 echo "</table>";
 }
 ?>

<div id ="footer"><h4 align="center">copyright@chandnikukreja</h4>
<p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
</tr>
</table>
</div>
</div>
</div>
</div>
</html>
