<?php
 session_start();
 $con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
 mysqli_select_db($con,'hackathon1');
 $errors=array();
 //register users
 $name=mysqli_real_escape_string($con,$_POST["name"]);
 $uname=mysqli_real_escape_string($con,$_POST["uname"]);
 $email=mysqli_real_escape_string($con,$_POST["email"]);
 $Pass=mysqli_real_escape_string($con,$_POST["Pass"]);
 $Password=mysqli_real_escape_string($con,$_POST["Password"]);
 $mob=mysqli_real_escape_string($con,$_POST["mob"]);
 $city=mysqli_real_escape_string($con,$_POST["city"]);
 $state=mysqli_real_escape_string($con,$_POST["state"]);

 //form validation
 if(empty($name)){array_push($errors,"Name is required");}
 if(empty($uname)){array_push($errors,"Username is required");}
 if(empty($Pass)){array_push($errors,"Password is required");}
 if($Password!= $Pass){(array_push($errors,"Password do not match"));}
      
 $q=" select * from newuser where uname='$uname' AND Pass='$Pass' ";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);

  if ($num == 1)
      {
        array_push($errors,"Username already exits");
    }
  //Register the user if no errors
  if (count($errors)==0) 
   {
	   $qy=" insert into newuser(name,uname,email,Pass,mob,city,state) values ('$name','$uname','$email','$Pass','$mob','$city','$state')";
	   mysqli_query($con,$qy);
     header('location:logsuccess.php');
   }
  else
  {
    header('location:sign_up.php');
  }
	//$code=substr(md5(mt_rand()),0,15);
?>
