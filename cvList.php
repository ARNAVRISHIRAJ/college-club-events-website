<?php
include ('config1.php');
?>
<?php 
session_start();
$loggedin=isset($_SESSION["username"]);
$username=$_SESSION["username"];
//session_strt();
//$_SESSION['loggedin']

// $query="SELECT * FROM 'cvgen";
// echo $query;

// $user;
// $user['user_id']=           
   
  //$result= mysqli_query($mysqli, "SELECT * FROM cvgen WHERE name='arnav';");
    // $result = mysqli_query($conn, $sql);
$cvlist=array();
$result= mysqli_query($mysqli, "SELECT * FROM cvgen WHERE user_ref='$username';");
while($row = mysqli_fetch_assoc($result)){
    $cvdata;
    $cvdata['id']=$row['id'];
    $cvdata['name']=$row['name'];
    $cvdata['email']=$row['email'];
    $cvdata['tel']=$row['tel'];
    $cvdata['address']=$row['address'];
    $cvdata['education']=$row['education'];
    $cvdata['exp']=$row['exp'];
    $cvdata['skills']=$row['skills'];
    $cvdata['username']=$row['user_ref'];
    array_push($cvlist,$cvdata);
}              
?>










<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Events List</title>
  </head>
  <body>
  <?php
include("config1.php");
?>
    <?php 
    require 'partials/_nav.php' ?>
    
<?php
// session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
// {
//     header("location: login.php");
//     exit;
// }
?>

<table border="3" id = "td" >
  <tr>
    <th>EVENT  </th>
    <th>DATE   </th>
    <th>TIME   </th>
    <th>VENU   </th>
    <th>LINK   </th>
    <th>PRICE   </th>
    <th>DESCRIPTION  </th>
    <th>View</th>
  </tr>
  <?php 
  $count=count($cvlist);
  for($i=0;$i<$count;$i++){
    $cvdata=$cvlist[$i];
  ?>

  <tr>
  
    <td><?php echo $cvdata['name'] ?>  </td>
    <td><?php echo $cvdata['email'] ?>  </td>
    <td><?php echo $cvdata['tel'] ?>  </td>
    <td><?php echo $cvdata['address'] ?>  </td>
    <td><?php echo $cvdata['education'] ?>  </td>
    <td><?php echo $cvdata['exp'] ?>  </td>
    <td><?php echo $cvdata['skills'] ?>  </td>
    <td><a href="display.php?id=<?php echo $cvdata['name'] ?>">View</a></td>
  </tr>
<?php } ?>

</table>


</body>
</html>
