<?php include 'header.php'; ?>
<style>
<?php include 'index.css'; ?>
</style>
<?php
// include ('partials/config1.php');
include ('config1.php');
?>
<?php
$showAlert = false;
$showError = false;


if(isset($_POST['SUBMIT'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    // $existSql="select * from 'users where username='$username'";
    
    
    if(($password == $cpassword)){
    $result= mysqli_query($mysqli, "INSERT INTO users(username,password,dt) VALUES ('$username', '$password',current_timestamp());");

if ($result){
    $showAlert = true;
}
}
else{
    $showError = "Passwords do not match";
}
}
?>
 








 <!DOCTYPE html>
<html lang="en">

<head>
     
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <title>SignUp  page</title>
</head>
<body>
<?php 
    require 'partials/_nav.php' ?>
    <section>
        <div class="form-box">
            <div class="form-value">
                 <form action="" method="POST">
                
                <h2>Sign Up</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" required name= "username">
                    <label for="">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required name ="password">
                    <label for="">Password</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required name ="cpassword">
                    <label for=""> Confirm Password</label>
                </div>
               
                <input type="submit" name="SUBMIT"> <br>
              
            </form>
        </div>
    </div>
    
</section>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>