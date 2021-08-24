<html>
<form id="quiz" action="resultc.php" method="post">

<?php
//error_reporting(0);
$uname=$_SESSION['name1'];
//if(!isset($_SESSION['name1']))
	//{
	  	//header('location:loginform.php');
    //}
 $con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
 mysqli_select_db($con,'hackathon1');
 //For checking last level
 $qu="select uname from users where uname='$uname' AND levels=3 AND field=4 ";
 $result=mysqli_query($con,$qu);
 $num=mysqli_num_rows($result);
 if($num==1)
  {
   header('location:profile1.php');}

//For other levels
 $qu1="select uname from users where uname='$uname' AND field = 4 ";
 $result1=mysqli_query($con,$qu1);
 $num1=mysqli_num_rows($result1);

 if ($num1 > 0)
     { $qu2="select uname from users where correctanswer > 3 ";
        $result2=mysqli_query($con,$qu2);
        $num2=mysqli_num_rows($result2);
        if ($num2 >0 )
        {  $qu3="select uname from users where levels=2 ";
           $result3=mysqli_query($con,$qu3);
           $num3=mysqli_num_rows($result3);
           if($num3>0)
           {
           	$v=11; $l=3;
           }else
           {
           	$v=6; $l=2;
           }
           
        }
        else
        {
        	$v=1; $l=1;
        }

     }
  else
   { 
     $v=6; $l=2;
   }
 $_SESSION['level1']=$l;
 $_SESSION['vall']=$v;
 for($i=$v;$i<($v+5);$i++){
 $q = "select * from questions where qid=$i";
 $query = mysqli_query($con , $q);

 while($rows = mysqli_fetch_array($query))
 {
 ?> 
 <div class="col-lg-12 d-block" class="q" style="margin: 0px;padding: 0px;">

 
  <h3 style="font-size: 30px;color: black;">
	<?php echo $i-(5*($l-1)); echo ".    " ; echo $rows['question']; ?>  </h3>
     <?php
         
     $q = "select * from answers where ans_id=$i";
     $query = mysqli_query($con , $q);
$s=1;
      while($rows = mysqli_fetch_array($query)){
       	 ?>
       <div class="card-body"  style="margin: 15px 50px 0px 30px;padding: 0px;font-size: 20px;">
       <input type="radio" class="z<?php echo $s ?>" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
        <?php echo $rows['answer'];  ?>
           </div><br><br>
      <?php
      $s++;
       } 
       
        }
       }   
     ?>
  <p id="runtimes"> </p>
 </div>
<input  type="submit" id="submit" name="btsubmit" value="submit" class="btn btn-success m-auto d-block">
  </form>
  </div>
  <h1 id="time"> </h1> 
<!-- <script>
  $('#button').click(function(){
    var now=new Date();
    var seconds=(now.getTime()-startDate.getTime())/1000;
    $('#runtimes').append('<p>'+seconds+'</p')
  })
</script> -->
</html> 