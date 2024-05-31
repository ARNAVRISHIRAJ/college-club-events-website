<?php 

session_start();
$loggedin=isset($_SESSION["username"]);

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/arnav/loginSystem">MUJ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/arnav/minorproject final/loginSystem/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(!$loggedin){
          ?>
    
      <li class="nav-item">
        <a class="nav-link" href="/arnav/loginSystem/login.php">Login</a>
      </li>
   
       
          <li class="nav-item">
              <a class="nav-link" href="/arnav/loginSystem/signup.php">Signup</a>
            </li>
            <?php }?>
              
  <?php if ($loggedin){
  ?>
          <li class="nav-item">
            <a class="nav-link" href="/arnav/loginSystem/logout.php">Logout</a>
          </li>
         
        <li class="nav-item">
        <!-- <a class="nav-link" href="/arnav/loginSystem/display.php">View Cv's</a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/arnav/minorproject final/loginSystem/cvList.php">Events List</a>
      </li>
      <?php }?>
      </ul>
  </div>
</nav>
