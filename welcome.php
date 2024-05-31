<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<?php
 include 'header.php'; 
?>
<style>
<?php include 'style.css'; ?>
</style>
<?php
include("config1.php");
?>
<?php

if(isset($_POST['SUBMIT']))
   {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $add = $_POST['add'];
    $education = $_POST['education'];  
    $exp = $_POST['exp'];   
    $skills = $_POST['skills'];
    $user_ref = $_SESSION['username'];
    $pp = $_FILES['pp'];
    $pp_des="images/". $_FILES['pp']['name'];
    $pp_loc=$_FILES['pp']['tmp_name'];
    $pp_name=$_FILES['pp']['name'];

    //if(move_uploaded_file("images/".$pp_name))
    if(move_uploaded_file($_FILES['pp']['tmp_name'],"images/".$pp_name))
    {
      //echo "file uploaded to images folder";
    }else{
      echo "error uploading";
    }
    // print_r($_FILES['pp']);
    // print_r($pp_loc);
    //print_r($pp_name);


    $sql="INSERT INTO cvgen(name ,email ,tel,address,education,exp,skills,user_ref,pp) VALUES ('$name', '$email', '$tel','$add','$education', '$exp', '$skills','$user_ref','$pp_des');";
  $result= mysqli_query($mysqli, $sql);
  $msg="";
if ($result)
{  $cvId=mysqli_insert_id($mysqli);  
    $msg= "Successfully Submited";
   // header("Location:display.php?id=".$cvId);
}
else 
{
  $msg= " Error ";
} 
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Event Creation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php require 'partials/_nav.php' ?>
<?php echo "<div>".$msg."</div>" ?>
    
  <h1>Event Creation</h1>
  
  <form action="" method="POST" id="cvForm" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" id="name" required name="name">
    <label for="email">Date</label>
    <input type="text" id="email" required name="email">
    <label for="phone">Time</label>
    <input type="text" id="phone" required name="tel">
    <label for="address">Venu</label>
    <input type="text" id="address" required name="add">
    <label for="education">Link</label>
    <textarea id="education" rows="1" required name="education"></textarea>
    <label for="experience">Price</label>
    <textarea id="experience" rows="1"required  name="exp"></textarea>
    <label for="skills">Description</label>
    <textarea id="skills" rows="3"required name="skills"></textarea>
    <br>

    <label for="file" >Upload Poster</label>
    <input type="file" name ="pp" >
   
    <br>
    
<?php
    //   if(isset($_FILES["dp"])){
    //   echo"<pre>";
    //   print_r($_FILES);
    //   echo"</pre>";
    //   $filename=$FILES["dp"]["name"];
    //   $file_size=$FILES["dp"]["size"];
    //   $file_tmp=$FILES["dp"]["tmp_name"];
    //   $file_type=$FILES["dp"]["type"];
    // if( move_uploaded_file($file_tmp,"images/".$file_name))
    // {
    //   echo "uploded";
    // }
    // else
    // {
    // echo"error";
    // }
    // }
?>
    <input type="submit" name ="SUBMIT">
    
  </form>


  <?php
  // $target_dir = "images/";
  // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  // $uploadOk = 1;
  // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // // Check if image file is a actual image or fake image
  // if(isset($_POST["submit"])) {
  //   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  //   if($check !== false) {
  //     echo "File is an image - " . $_FILES["fileToUpload"]["tmp_name"] . ".";
  //     $uploadOk = 1;
  //   } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  //   }
  // }
  ?>
  
  
  
  

<?php
// if(isset($_FILES["dp"])){
//   echo"<pre>";
//   print_r($_FILES);
//   echo"</pre>";
//   $filename=$FILES["dp"]["name"];
//   $file_size=$FILES["dp"]["size"];
//   $file_tmp=$FILES["dp"]["tmp_name"];
//   $file_type=$FILES["dp"]["type"];
//  if( move_uploaded_file($file_tmp,"images/".$file_name))
// {
//   echo "uploded";
// }
// else{
//   echo"error";
// }
// }
?>
<?php
//  $filename=$FILES["dp"]["name"];
//  $tempname=$FILES["dp"]["temp_name"]
//  $folder = "image/". $filename;
//  move_uploaded_file($tempname,$folder);
  ?>
 


<!-- <script src="script.js"></script> -->
</body>
</html>


















