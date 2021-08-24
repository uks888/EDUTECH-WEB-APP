<?php
	$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
    mysqli_select_db($con,'hackathon1');
  
	if(isset($_POST['name']))
		{$name=$_POST["name"];}
	if(isset($_POST['feedback']))
	   {$feedback=$_POST["feedback"];}
    if(isset($_POST['submit']))
	   {$submit=$_POST["submit"];}

   {
	if($submit==true)
	{
		if($name && $feedback)
		{
			$insert="insert into comments(name,feedback) values ('$name','$feedback')";
			mysqli_query($con,$insert);
			echo "Thank you for your Feedback, will contact you soon.."; 
								 header( "refresh:3; url=index.php" );
		}else
		{
			echo"Please fill all the fields.";
		}
	}
  } 
	?>