<?php
session_start();
$v=$_SESSION['vall'];
$con=mysqli_connect('localhost','sarfraj','E4rM4xVnpMMvejQ7','hackathon1');
mysqli_select_db($con,'hackathon1');
if(isset($_POST['submit']))
  { if(!empty($_POST['quizcheck'])){
		$count=count($_POST['quizcheck']);
		echo"Out of 5 you have selected ".$count." options";
		$resulti = 0;
		$i = $v;
    $selected=$_POST['quizcheck'];

     print_r($selected);
       $q="select * from questions where qid>($v-1) and qid<($v+5) ";
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
      $l= $_SESSION['level1'];
      $uname=$_SESSION['name1'];
      $word = "insert into users(uid,uname,totalquestion,correctanswer,levels,field) values('','$uname','5','$resulti','$l','4')";
      mysqli_query($con,$word);
   }
  }
?>
