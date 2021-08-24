<?php session_start() ?> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--======bootstrap class======---->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <link rel="stylesheet" type ="text/css" href="sign_up.css">
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Sign Up</title>

   <style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;


.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
</style>

    

</head>
<body>

  <!--========header starts here====---->
 


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
      <li class="nav-item login">
        <a class="nav-link" href="loginform.php">LOGIN<span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>

  

     <!--===navbar===-->
  
  <!--========header section ends here=====-->
  <?php $nameErr=""; ?>

	<section>
	<div class = "signupbox">
     <div class = "container">
		     <div class = "row">
		       	<div class="col-md-6 col-md-offset-3 id="form">
               <h1  text -color : white >Sign Up</h1><br>
               <img src="scholar.png" class = "fevicon">
               <i class="fa fa-user icon"></i>

               <div id="error_msg"></div>
               <p><span class="error">* required field</span></p>
			         <form method="post" action="registeration.php" >
                <span class="error">*</span>
			           <label>Name :</label><br>
                 <input type="text" name="name" class="form-control text" placeholder="Enter your name" value="" id="name"> <br> 
                 <span class="error">*</span>
                 <div class="form-group">              
                 <label>User name :</label><br>
			           <input type="text" name="uname" class="form-control text" placeholder="Enter your  User name" value="" id="uname"><br>
                 <span id="usercheck" class="help-block"></span>
               </div>
                 <br><span class="error">*</span>
			           <label>Email :</label><br>
                 <input type="email" name="email" class="form-control text" placeholder="example@gmail.com" value="" id="email"><br>
                 <span class="error">*</span>
                 <label>Password :</label><br>
			           <input type="Password" name="Pass" class="form-control text" placeholder="Enter your Password" value="" id="Pass"><br>
                 <span class="error">* </span>
                 <label> Confirm Your Password :</label><br>
			           <input type="Password" name="Password" class="form-control text" placeholder=" Re-Enter your Password" value="" id="Password"><br>
                 <span class="error">* </span>
                 <label>Mobile No. :</label><br>
                 <input type="text" name="mob" class="form-control text" placeholder="Enter your mobile number" value="" id="mob"><br>
                 <span class="error">* </span>
                 <label>City:</label><br>
                 <input type="text" name="city" class="form-control text" placeholder="Enter your city" value="" id="city"><br>
                 <span class="error">* </span>
                 <label>State :</label><br>
                 <input type="text" name="state" class="form-control text" placeholder="Enter your state" value="" id="state"><br>
                 <!--<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>-->
                 <input type="submit" name="" id="sub" value="Submit">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
              
          </form>
			</div>
		</div>
		
      </div>
	</section>
  

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
  <!---=======footer ends here====----->


<!---============optional js=====--->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#uname').keyup(function() {
  var usercheck = $(this).val();
        $('#usercheck').html('<img src="loading.gif" width="150" />');
      $.post("check.php", {uname: usercheck} , function(data)
      {
      if (data.status == true)
      {
      $('#usercheck').parent('div').removeClass('text-danger').addClass('text-success');
      
      } else {
      $('#usercheck').parent('div').removeClass('text-success').addClass('text-danger');
      }
      $('#usercheck').html(data.msg);
      },'json');
  });
});
</script>