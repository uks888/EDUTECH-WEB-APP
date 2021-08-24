<html>
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
</html>
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
//echo"<img src="$target_path" height="100" width="100"/> 
$select_query = "SELECT * FROM image ORDER BY 'images_id' DESC";
$sql = mysqli_query($con,$select_query) or die(mysqli_error($con));   
$row = mysqli_fetch_array($sql)
?>
 <html>
 <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
   <img src="<?php echo $row["images_path"]; $row["images_id"];?>" height="100px" width="100px" />
   

</td>
</tr>
</tbody></table>
</html>
