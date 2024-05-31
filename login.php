<?php 
include 'header.php'; 
// session_start();
?>
<style>
<?php include 'index.css';
 include 'partials/config1.php';
  ?>

</style>
<?php
$login = false;
$showError = false;
// if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['SUBMIT'])){
    include 'config1.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $result= mysqli_query($mysqli, "SELECT * FROM users WHERE username ='$username' AND password ='$password';");
    // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
if ($result)
{    
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        $login = true; 
        session_start();       
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    }
echo "Invalid Username or Password";
}
else 
{
  echo " Error ";
} 
    // $result = mysqli_query($conn, $sql);
    // if(isset($result)){
    //     // echo $username;
    //     // echo $password;
    //     echo $result;
    //     return;
    //}
    
    
    // else{
    //     $showError = "Invalid Credentials";
    // }

} 
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
  </head>
  <body>
    <?php 
    require 'partials/_nav.php' ?>

    <section>       
    <div class="form-box">
        <div class="form-value">
            <form action="" method="POST">

              
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="username" required name= "username">
                    <label for="">username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required name ="password">
                    <label for="">Password</label>
                </div>
               
                <input type="submit" name="SUBMIT"> <br>
               
            </form>
            
        </div>
    </div>
</section>
  </body>
</html>
