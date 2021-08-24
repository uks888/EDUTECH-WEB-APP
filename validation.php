<?php
session_start();
$uname = $Pass = '';

$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
if($con)
{ echo"connection successsful";}
else
{ echo"no connection";}
mysqli_select_db($con,'hackathon1');
$uname=$_POST['uname'];
$Pass=$_POST['Pass'];

$q=" select * from newuser where uname='$uname' AND Pass='$Pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name1']=$uname;
	header('location:profile1.php'); }
else{

	 header('location:loginform.php');
	}


?>
