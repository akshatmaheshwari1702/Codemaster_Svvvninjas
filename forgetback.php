<!DOCTYPE html>
<html>
<head>
	<title> change</title>
	<style type="text/css">
		body{
			background-image: url(./images/rohit2.jpg);
		}
	</style>
</head>
<body  >

</body>
</html>

<?php
$email=$_POST['uemail'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root','','sms');

 if($con==false){
 	echo"database is not connected";
}
$q="SELECT * FROM  stu WHERE email='$email'";
$ck=mysqli_query($con,$q);
if($ck)
{
	$q1="UPDATE stu SET password='$pass' WHERE email='$email'";
	mysqli_query($con,$q1);
	?>
	<div> 
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<u> <h1 align="center" style="color: yellow"> password updated successfully</h3></u> 
	 </div>
	 <?php
}
else{
	?>
	<div> 
	<u><h3 align="center" style="color: blue"> password not updated successfully</h3></u> 
	<br>
	<h3>
		please try once more with correct inforation
	</h4>
	 </div>
	 <?php 
}
?>