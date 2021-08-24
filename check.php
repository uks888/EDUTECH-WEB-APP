<?php
include_once("connection.php");
if(isset($_POST['uname']) && $_POST['uname'] != '')
    {
    $response = array();
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $sql  = "select uname from newuser where newuser.uname='".$uname."'";
        $res    = mysqli_query($conn, $sql);
        $count  = mysqli_num_rows($res);
        if($count > 0)
    {
      $response['status'] = false;
      $response['msg'] = 'Username already exists.';
    }
    else if(strlen($uname) < 6 || strlen($uname) > 15){
      $response['status'] = false;
      $response['msg'] = 'Username must be 6 to 15 characters';
    }
    else if (!preg_match("/^[a-zA-Z1-9]+$/", $uname))
    {
      $response['status'] = false;
      $response['msg'] = 'Use alphanumeric characters only.';
    }
    else
    {
      $response['status'] = true;
      $response['msg'] = 'Username is available.';
    }
     echo json_encode($response);
    }
?>

