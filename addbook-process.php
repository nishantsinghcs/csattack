<?php
require_once("./config.php");
@session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
//echo "hello brother";
header('location:./login.php?myacc');
}

        $time=date('Y-m-d H:i:s');
        
        $size=$_FILES["fileToUpload"]["size"]/1024;
        $bookname=$_POST["bookname"];
      $course_name=$_POST["course"];
      $subject_name=$_POST["subject"];
      $module=$_POST["module"];
      $status=0;
 $id=2;
 $uploadername=$_SESSION['SESS_FIRST_NAME'];

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


// Check if file already exists

  $filename=$_FILES['fileToUpload']['name'];
  $path = "./uploads/user/";

    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $newpath = $path.'/'.$filename;
    $newname = $filename;
    $counter = 1;
    while (file_exists($newpath)) {
           $newname = $name .'_'. $counter . $ext;
           $newpath = "$path$newname";
           $counter++;
     }

   echo $newpath;



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newpath)) {
       $path= $newpath;
       mysql_query("INSERT INTO download (user_id,course,subject_name,module,book_name,size,path,status,time,uploadername) 
        values('$id','$course_name','$subject_name','$module','$bookname','$size','$path','$status','$time','$uploadername')");

      @header("location:./uploadbooks.php?uploaded");
        echo "FIle uploaded to data base too.";
    } else {
       echo "Sorry, there was an error uploading your file.";
    }
}
?>  

