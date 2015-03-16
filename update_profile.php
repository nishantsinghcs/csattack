<?php
require_once("./config.php");

        $time=date('Y-m-d H:i:s');
        
        //$size=$_FILES["fileToUpload"]["size"]/1024;
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      $about=$_POST["about"];
     



$target_dir = "./img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists

// Check file size
if ($_FILES["fileToUpload"]["size"] ==0) {

     $path= $_POST['path'];
     echo $path;
}
// Allow certain file formats
else{

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $path= $target_file;

    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
       
        $fname=$_SESSION['SESS_FIRST_NAME'];
         if($_POST["password"]>0){
      $password=md5($_POST['password']);
       mysql_query("UPDATE cipltech_customer SET image='$path',about_me='$about',cust_email='$email',cust_contact='$phone',cust_password='".md5($_POST['password'])."' WHERE cust_fname='$fname'"); 
    }
    else{
     mysql_query("UPDATE cipltech_customer SET image='$path',about_me='$about',cust_email='$email',cust_contact='$phone' WHERE cust_fname='$fname'"); 
      }
        @header("location:./myacc.php?updated");
        
     

?>  