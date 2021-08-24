<html>
<form action="resultt.php" method="post">

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
 $qu="select uname from users where levels=3 AND field=5 ";
 $result=mysqli_query($con,$qu);
 $num=mysqli_num_rows($result);
 if($num==1)
  {
   header('location:profile1.php');}

//For other levels
 $qu1="select uname from users where uname='$uname' AND field = 5 ";
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
           	$v=26; $l=3;
           }else
           {
           	$v=21; $l=2;
           }
           
        }
        else
        {
        	$v=16; $l=1;
        }

     }
  else
   { 
     $v=21; $l=2;
   }
 $_SESSION['level1']=$l;
 $_SESSION['vall']=$v;
 for($i=$v;$i<($v+5);$i++){
 $q = "select * from questions where qid=$i";
 $query = mysqli_query($con , $q);

 while($rows = mysqli_fetch_array($query))
 {
 ?> 
 <div class="col-lg-12 d-block" style="margin: 0px;padding: 0px;">

 
  <h3 style="font-size: 30px;color: black;">
	<?php echo $i-(5*($l-1)+15); echo ".    " ; echo $rows['question']; ?>  </h3>
     <?php
         
     $q = "select * from answers where ans_id=$i";
     $query = mysqli_query($con , $q);

      while($rows = mysqli_fetch_array($query)){
       	?>
       <div class="card-body" style="margin: 15px 50px 0px 30px;padding: 0px;font-size: 20px;">
       <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
        <?php echo $rows['answer'];  ?>
           </div><br><br>
      <?php
      
       }
       
        }
       }   
     ?>
 </div>
</form>
</html>
<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
    

   </form>
  </div> 
 <?php

if(isset($_POST['submit']))
 { if(!empty($_POST['quizcheck']))
	{ $count=count($_POST['quizcheck']);
		echo"Out of 5 you have selected ".$count." options";
		$uname=$_SESSION['name1'];
		$resulti = 0;
		$i = $v;
    $selected=$_POST['quizcheck'];

    print_r($selected);
    $q="select * from questions where qid>($v-1) and qid<($v+5)";
    $query1= mysqli_query($con, $q);
    while($rows=mysqli_fetch_array($query1)){
      print_r($rows['ans_id']);
      $checked=$rows['ans_id']==$selected[$i];
      if($checked){
      	$resulti++;
          }
        $i++;
         }
      print_r($resulti);
      $word = "insert into users(uid,uname,totalquestion,correctanswer,levels,field) values('','$uname','5','$resulti','$l','5')";
      mysqli_query($con,$word);
   }
 }
?>