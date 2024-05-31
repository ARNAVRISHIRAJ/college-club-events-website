
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
    
    include ('_nav.php');
    
    ?>

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
