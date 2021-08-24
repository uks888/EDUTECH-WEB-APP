<?php
 session_start();
 //error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!--bootstrap style-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  




  <!--style for this webpage-->
 <link rel="stylesheet" type="text/css" href="style.css">
  <title>EduSmarT</title>
  <link rel="shortcut icon" href="fevicon.png" />

  <style>
.button1 {
  border-radius: 10px;
  background-color: green;
  border: none;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 125px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -20px;
  transition: 0.5s;
}

.button1:hover span {
  
   padding-left: 25px;

}

.button1:hover span:after {
  opacity: 1;
  left: 0;
}

.button2 {
  border-radius: 10px;
  background-color: green;
  border: none;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 125px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  left: 50%;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  
   padding-right: 25px;

}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}



body{
  margin: 0;
  padding: 0;
  background : url(result1.jpeg);
  background-color: white;
  background-size: cover;
  background-position: center ;
  font-family: sans-serif;
  background-attachment: fixed;
}
h1 {
  text-shadow: 2px 2px black;
  font-family: "Times New Roman", Times, serif;
}
</style>
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
	<!--========header  section ends here=====-->
  <!--========php code begins here========-->
  <?php
$v=$_SESSION['vall'];
$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
if(isset($_POST['btsubmit']))
  { if(!empty($_POST['quizcheck']))
   { $count=count($_POST['quizcheck']);
    //echo"Out of 5 you have selected ".$count." options";
    $resulti = 0;
    $i = $v;
    $selected=$_POST['quizcheck'];

    // print_r($selected);
       $q="select * from questions where qid>($v-1) and qid<($v+5) ";
       $query1= mysqli_query($con, $q);
       while($rows=mysqli_fetch_array($query1)){
       // print_r($rows['ans_id']);
         $checked=$rows['ans_id']==$selected[$i];
         if($checked){
          $resulti++;
           }
         $i++;
        }
     // print_r($resulti);
      $l= $_SESSION['level1'];
      $uname=$_SESSION['name1'];
      $word = "insert into users(uid,uname,totalquestion,correctanswer,levels,field) values('','$uname','5','$resulti','$l','4')";
      mysqli_query($con,$word);
      if($l==3)
      {
        $nl="NUll";
      }elseif( $l==2)
       { if($resulti>3)
         $nl=3;
        else
         $nl=1; 
       }else
      {  if($resulti>3)
         $nl=2;
        else
         $nl=1; 
      }
    
   }
 }
?>
<!--========php code ends here========-->


<div class="container">
      <div class="row">
        <div class="col-md-8">
<br>
 
<h1 ><i> YOUR RESULT:</i></h1><br>

<table class="table table-hover table-dark">

  <tbody>
      <td>Questions attempted</td>
      <td><?php echo $count ; ?></td>

    </tr>
    <!-- <tr>
      
      <td>Assessment</td>
      <td>//;?</td>
    </tr> -->
    <tr>
     
      <td>Your Score</td>
      <td><?php echo $resulti*2 ; echo "/10";?> </td>
     
    </tr>
    <tr>
     
      <td>Current Level</td>
      <td><?php echo $l ;?> </td>
     
    </tr>
    <tr>
      
      <td>Next Level</td>
      <td><?php echo $nl ;?></td>
    </tr>

  </tbody>
</table>
</div>
<div class="col-md-4">
<?php if($resulti > 3)
       { ?>
         
         
        <iframe src="https://giphy.com/embed/5heRc94mvAatHzbofP" width="400" height="400" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/stickers/Dress2unDress-newin-dress2undressfashion-dress2undress-5heRc94mvAatHzbofP"></a></p>


       <?php }
       else
        { ?> 
          <iframe src="https://giphy.com/embed/45685UbEAB2natXGI4" width="400" height="400" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/stickers/45685UbEAB2natXGI4"></a></p>

        <?php
        }

        ?>
</div>
</div>
 <button class="button1"><a href="profile1.php"><font color="white"><span>Previous </span></font></a></button>
 
    <button class="button2" ><a href="profile_testc.php"><font color="white"><span>Next </span></font></a></button>
  </div>
</div>
</div><br><br>




<!--=======footer strats here====--->
  <footer class="bg-dark py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="text-white">@copyright 2018 EduSmarT.All rights reserved.</p>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

