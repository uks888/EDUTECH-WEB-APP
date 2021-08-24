<?php
session_start();
$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
mysqli_select_db($con,'hackathon1');
//if(!isset($_SESSION['name1']))
  //{
    //header('location:loginform.php');
 // }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!--bootstrap style-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>

<script type="text/javascript" src="jquery-3.3.1min.js"></script>
    <script type="text/javascript" src="chartjs/Chart.min.js"></script>
    <script type="text/javascript" src="chartjs/app.js"></script>

  <style type="text/css">
   #chart-container {
        width : 440px;
        height:auto;
  </style>



  <!--style for this webpage-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>EduSmarT</title>
  <link rel="shortcut icon" href="fevicon.png" />
</head>
<body>
  <script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
  <!--header starts-->
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EDuSmarT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Signout</a>
      </li>  
    </ul>
  </div>
</nav>

     <!--===navbar===-->
	<!--========header section ends here=====-->



<!--======stdudent id start====---->
<section class="studentid">
<div class="row">
  <div class="col-3 dash">
    <div class="row text-center">
      <div class="col-md-12 col-sm-12 text-white">
        <?php
        
        $con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');

          $select_query = "SELECT * FROM image ORDER BY 'images_id' DESC";
          $sql = mysqli_query($con,$select_query) or die(mysqli_error($con));   
          $row = mysqli_fetch_array($sql);
          $d= $row['images_path'];

        ?>
        <img class="fluid" id="profilepic" src="<?php  echo $d; ?>" width="110px">


        <!-- ashok Button trigger modal -->
        <button type="button" class="btn btn-secondary bg-dark text-white" data-toggle="modal" data-target="#exampleModalCenter">
        Click Here to uplaod your pic
        </button>

<!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Upload Your Image</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      <!----- codes starts here for image upload ----->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post"> 
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
<input name="uploadedimage" type="file">
</td>

</tr>
<tr>
<td>
<input name="Upload Now" type="submit" value="Upload Image">
</td>
</tr>
</tbody></table>
</form>
<?php 
$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
if($con)
{ $db_selected = mysqli_select_db($con,'hackathon1');

 if (!$db_selected) {
   die ('Can\'t use foo : ' . mysqli_error());}
}
else
  { die('Not connected : ' . mysqli_error());}
function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)

       { case 'image/bmp': return '.bmp';

         case 'image/gif': return '.gif';

         case 'image/jpeg': return '.jpg';

         case 'image/png': return '.png';

         default: return false;
       }
   }

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";}
if (!empty($_FILES["uploadedimage"]["name"])) { 
    $file_name=$_FILES["uploadedimage"]["name"]; 
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];  
    $imgtype=$_FILES["uploadedimage"]["type"];  
    $ext= GetImageExtension($imgtype); 
    $imagename=date("d-m-Y")."-".time().$ext; 
    $target_path = "image1/".$imagename; 

 if(move_uploaded_file($temp_name, $target_path)) { 
    $query_upload="INSERT INTO image (images_id,images_path,submission_date) VALUES  
('','".$target_path."','".date("Y-m-d")."')";  
   
    mysqli_query($con,$query_upload) or die("error in $query_upload == ----> ".mysqli_error($con));   
}else{  
   exit("Error While uploading image on the server"); 
 } 
}
?> 
        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
        <p><?php echo $_SESSION['name1']; ?></p>
      </div>
    </div>
    <div class="row text-center" style="margin: 0px;padding: 0px;">
      <div class="col-md-12 col-sm-12 text-white" style="margin: 0px;padding: 0px;">
        <p>_____________________</p>
      </div>
    </div>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active text-white bg-dark" id="v-pills-test-tab" data-toggle="pill" href="#v-pills-test" role="tab" aria-controls="v-pills-test" aria-selected="true" style="margin: 2px"><i class="fas fa-chalkboard-teacher"></i>&nbsp&nbspTests</a>
      <a class="nav-link text-white bg-dark" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="margin: 2px"><i class="fas fa-user-alt"></i>&nbsp&nbspProfile</a>
      <a class="nav-link text-white bg-dark" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false" style="margin: 2px"><i class="fas fa-paste"></i>&nbsp&nbspReport</a>
      <a class="nav-link text-white bg-dark" id="v-pills-support-tab" data-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false" style="margin: 2px"><i class="fas fa-headset"></i>&nbsp&nbspSupport</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-test" role="tabpanel" aria-labelledby="v-pills-test-tab">
        <div class="container">
          <div class="row dash_contenthead">
            <div class="col-md-12 col-sm-12">
              <h3>TESTS</h3>
            </div>
          </div>
           <div class="row instruction" style="margin: 5px 5px">
            <div class="col-md-12 col-sm-12">
              <h3 style="text-align: center;">Instructions About tests:</h3>
                <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.
          Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.<br><br>
            &nbsp&nbsp1. Every test contains 15 questions, each level with 5 questions.<br>
            &nbsp&nbsp2. The student have to give mediocore test first which consists of 5 questions. According to his/her performance he/she will be updated to next or below level test paper.<br>
            &nbsp&nbsp3. Each test will be of 20min only.<br>
            &nbsp&nbsp4. Best of Luck.
                </p>
            </div>
          </div>
          <div class="row dash_content">
            <div class="col-md-12 col-sm-12">
              <ul class="list-group">
                <li class="list-group-item list-group-item-primary test_list" id="a1">APTITUDE TESTS
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary testbut " style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">
                      Click Here
                    </button></li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>                
                <li class="list-group-item list-group-item-danger test_list" id="a2">PERSONALITY TESTS
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary testbut" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">
                      Click Here
                    </button></li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"><a href="profile_testc.php"> Save changes</a></button>
                          </div>
                        </div>
                      </div>
                    </div>

                <li class="list-group-item list-group-item-secondary test_list" id="a3">REASONING TESTS
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary testbut" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">
                      Click Here
                    </button></li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>                
                
                <li class="list-group-item list-group-item-success test_list" id="a4"><a href="profile_testc.php">CODING TESTS
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary testbut" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">
                      Click Here
                    </button></li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>                
                
                <li class="list-group-item list-group-item-warning test_list"  id="a5"><a href="profile_testt.php"> TECHNICAL TESTS
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary testbut" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">
                      Click Here
                    </button></li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button href="profile_testt.php" type="button" class="btn btn-primary"> Save changes</button>
                           
                          </div>
                        </div>
                      </div>
                    </div>                
                
                <!---<script>
                function function1()
                {} --->

                
                <a href=""><li class="list-group-item list-group-item-info">MOCK TESTS</li></a>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="container">
          <div class="row dash_contenthead">
            <div class="col-md-12 col-sm-12">
              <h3>PROFILE OVERVIEW</h3>
            </div>
          </div>
          <div class="row dash_contentsubhead">
            <div class="col-md-12 col-sm-12">
              <h5>Personal Info:</h5>
            </div>
          </div>
          <div class="row dash_content">
            <div class="col-md-12 col-sm-12">
              <?php
              $q = "select * from newuser where uname='".$_SESSION['name1']."'";
              $query = mysqli_query($con , $q);
              $rows = mysqli_fetch_array($query);
              echo "<p><bold>Name :  "; echo $rows['name'] ;echo"</bold></p>"; 
              echo "<p><bold>Email :  "; echo $rows['email']; echo"</bold></p>";
              echo "<p><bold>Mobile No. :  "; echo $rows['mob'] ;echo"</bold></p>";
              echo "<p><bold>City :  "; echo $rows['city'] ; echo"</bold></p>";
              echo "<p><bold>State :  "; echo $rows['state'] ; echo"</bold></p>";
              ?>
            </div>
          </div>
          <div class="row dash_contentsubhead">
            <div class="col-md-12 col-sm-12">
              <h5>Login Info:</h5>
            </div>
          </div>
          <div class="row dash_content">
            <div class="col-md-12 col-sm-12">
              <?php
              $q = "select * from newuser where uname='".$_SESSION['name1']."'";
              $query = mysqli_query($con , $q);
              $rows = mysqli_fetch_array($query);
              echo "<p><bold>Username :  "; echo $rows['uname'] ;echo "</bold></p>"; 
              echo "<p><bold>Password :  "; echo $rows['Pass']; "</bold></p>";
              ?>

            </div>
          </div>
          <div class="row dash_contentsubhead">
            <div class="col-md-12 col-sm-12">
              <h5>Image:</h5>
            </div>
          </div>
          <div class="row dash_content">
            <div class="col-md-12 col-sm-12">

            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
         <div class="container">
          <div class="row dash_contenthead">
            <div class="col-sm-12 col-md-12">
              <h3>REPORT</h3>
            </div>
          </div>
          <div class="row dash_content">
            <div class="col-md-12 col-sm-12">
             <div id = "chart-container">
              <canvas id="mycanvas"></canvas>
            </div>

            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
        
      </div>
    </div>
  </div>
</div>
</section>
<!---======student id end======----->


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


<!---============optional js=====--->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>