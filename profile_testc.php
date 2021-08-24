<?php
session_start();
$_SESSION['out']="12";
$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
mysqli_select_db($con,'hackathon1');
 //{
    //header('location:loginform.php');
  //}
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!--bootstrap style-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



  <!--style for this webpage-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>EduSmarT</title>
  <link rel="shortcut icon" href="fevicon.png" />
</head>
<body>
  
  <!--header starts-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EDuSmarT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

     <!--===navbar===-->
	<!--========header section ends here=====-->
<!---<?php// echo "<h1>" ; echo $_SESSION['level1'] ; echo "</h1>" ?>--->


 


<h1>
  <div style="font-weight:bold" id="quiz-time-left"></div>
</h1>



  <!--=====test page====---->
  <section class="testpage">
    <div class="container">
      <div class="row test_bg">
        <div class="col-md-12">
          <div class="row test_paper_head">
            <div class="col-md-10">
              <h3>TEST</h3>

            </div>
          </div>
          <div class="row test_paper">
            <div class="col-md-10" style="text-align: left;padding: 30px">
             <?php include 'quizc.php'; ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!---=====test part end====--->




  <!--=======footer strats here====--->
  <footer class="bg-dark py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <p class="text-white">@copyright 2018 EduSmarT.All rights reserved.</p>
        </div>
        <div class="col-md-6 col-sm-6 text-right">
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
  
 

<!---Timer--->
 <h1>
  <div style="font-weight:bold" id="quiz-time-left"></div>
  <script type="text/javascript">
    var total_seconds=60*5;
    var c_minutes=parseInt(total_seconds/60);
    var c_seconds=parseInt(total_seconds%60);
    function CheckTime(){
      document.getElementById("quiz-time-left").innerHTML
      ='Time Left =' + c_minutes + ':' + c_seconds
      if(total_seconds<=0)
      {
        setTimeout('document.getElementById("quiz").submit()',1);
      }
      else{
        total_seconds=total_seconds - 1;
        c_minutes=parseInt(total_seconds/60);
        c_seconds=parseInt(total_seconds%60);
       setTimeout("CheckTime()",1000);
      }
    }setTimeout("CheckTime()",1000);
  </script>
<!-- minimise code starts -->
<script>
  function check()
  {
    if(document.hasFocus()==lastFocusStatus)return;
    lastFocusStatus=!lastFocusStatus;
    alert(lastFocusStatus ? 'with': 'without');
    $("#status").innerText=lastFocusStatus ? 'with': 'without';
    clearInterval(x);

  }
  window.statusE1=document.getElementById('status');
  window.lastFocusStatus=document.hasFocus();
  check();
  var x=setInterval(check,200);

  
</script>
<!-- minimise code ends -->
<!--to calculate time of submission-->
<script>
$( window ).load(function() {
  var timeStart = new Date();

  $("#submit").on('click', function() {
    var timeEnd = new Date();
    var timeDiff = timeEnd - timeStart;
    console.log(timeDiff);

    $("#time").html('Time Difference: ' + timeDiff + ' ms');
  });
});
</script>




<!---============optional js=====--->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath `.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
</body>
</html>