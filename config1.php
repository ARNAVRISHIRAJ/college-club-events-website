<?php 
//  echo "connecting to db"; 


$dbhostname ="localhost";
$dbusername="root";
$dbpassword="";
$database ="users";


$mysqli = mysqli_connect($dbhostname , $dbusername ,$dbpassword,$database);
$conn = $mysqli;//mysqli_connect( $servername , $username , $password , $users);


//  echo "Connected to database";
?>