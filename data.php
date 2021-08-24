<?php
 //setting header to json
 header('Content-Type: application/json');

 //session_start();
 $_SESSION['name1']=$uname;
 $con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
 mysqli_select_db($con,'hackathon1');

 $q1=sprintf(" SELECT correctanswer , levels FROM users WHERE uname = $uname ORDER BY levels DESC");
 $result1=mysqli_query($con,$q1);
 //$num=mysqli_num_rows($result);

 $data1 = array();
 foreach ($result1 as $row){
 	$data1[] = $row;
 }
 
print json_encode($data1);

//$q1=sprintf(" SELECT correctanswer , levels FROM users WHERE uname = 'Isha12' ");
// $result1=mysqli_query($con,$q1);
?>

 