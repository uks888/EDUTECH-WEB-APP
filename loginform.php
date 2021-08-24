<html>
<head><title>LOGIN Page</title>
	<link rel="stylesheet" type ="text/css" href="loginform.css">
	<!--======bootstrap class======---->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!--bootstrap style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script type="text/javascript">
    	
    	function valid()
    	{
    		var username = document.getElementById("uname");
    		var password = document.getElementById("Pass");

    		if(username.value.trim() == "" || password.value.trim() == "")
    		{
    			alert ("No blank values are allowed");
    			return false;
    		}
    		else
    		{
    			true;
    		}
    	}
    </script>


	
</head>
<body>


	    <!--===navbar===-->
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">TESTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">CONTACT US</a>
      </li>   
    </ul>
    
  </div>
  <ul class="navbar-nav">
    	<li class="nav-item sign_up">
    		<a class="nav-link" href="sign_up.php">SIGN UP<span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>


  

	<!--====start of login section====-->
<section class="loginbox">

    	<div class="container fluid">
    		<div class="row text-white">
    			<div class="col-md-12">
    			
    				<h1>Login Here</h1>
    				<img src="scholar.png" class = "fevicon">
    			
    				<form  action="validation.php" onsubmit="return valid()" method="post">
    					<p>Username</p>
    					<input type="text" name="uname" id="uname" class="form-control text"  placeholder="Enter username"><br><br>
    					<p>Password</p>
    					<input type="password" name="Pass" id="Pass" class="form-control text"  placeholder="Enter password"><br><br>
    					<input type="submit" name="" class="form-control text"  value="Login"><br><br>
    					<a href= "#">Forgot password?</a><br><br>
    					<a href= "#">Don't have an account?</a><br><br>
    					<a href= "sign_up.php">Sign up </a>

    				</form>
    			</div>
			</div>
		</div>
</section>

<!--====end of login section====--->
 

<!--=======footer starts here====--->

	<footer class="bg-dark py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="text-white">@copyright 2018 paradise design.all rights reserved.</p>
				</div>
				<div class="col-md-6 text-right">
					<ul class="social text-white">
						<a href="#"><li><i class="fab fa-facebook" aria-hidden="true"></i></li></a>
						<a href="#"><li><i class="fab fa-twitter-square" aria-hidden="true"></i></li></a>
						<a href="#"><li><i class="fab fa-instagram" aria-hidden="true"></i></li></a>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	

<!--======footer ends here====--->




</body>
</html>

