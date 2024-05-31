<?php 
// require 'partials/_nav.php' 
?>
<?php
include ('config1.php');
// include ('welcome.php');

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
$cvdata;
$result= mysqli_query($mysqli, "SELECT * FROM cvgen WHERE user_ref='$username';");

//$cvId=$_REQUEST['id'];
//if(isset($cvId)){
   // $result= mysqli_query($mysqli, "SELECT * FROM cvgen WHERE user_ref='$username';");
    //$result= mysqli_query($mysqli, "SELECT * FROM cvgen WHERE user_ref='$username' AND id='$cvId';");
    while ($row = mysqli_fetch_assoc($result)){
        $cvdata['id']=$row['id'];
        $cvdata['name']=$row['name'];
        $cvdata['email']=$row['email'];
        $cvdata['tel']=$row['tel'];
        $cvdata['address']=$row['address'];
        $cvdata['education']=$row['education'];
        $cvdata['exp']=$row['exp'];
        $cvdata['skills']=$row['skills'];
        $cvdata['username']=$row['user_ref'];
        $cvdata['pp']=$row['pp'];
        
    } 
//}
               
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUJ EVENTS BOOKING </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <header>
        <a href="#" class="logo">MUJ</a>
        <nav>
            <a href="#home" class="active">Home</a>
            <!-- <a href="#about">Technical Events</a> -->
            <a href="#about">College Events</a>
            <a href="#services">Club Events</a>
            <!-- <a href="#portfolio">hfh</a> -->
            <a href="#contact">Contact Us</a>
        </nav>
    </header>
    <!-- <section id="home"> -->




    <section id="home" class="background-image-section">

        <div class="content">
            <h1><b>WELCOME TO<br><span>MANIPAL UNIVERSITY JAIPUR</span> <br>EVENTS</b></h1>
            <p class="par"> <br> </p>

            <button class="cn"><a href="#about">EXPLORE</a></button>

    </section>



    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



    <section id="about">


        <div class="container py-5">
            <h1 class="text-center" style="color: rgb(255, 255, 255)">College Events</h1>

            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <div class="col">
                    <div class="card">
                        <img src='<?php echo $cvdata['pp'] ?>' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cvdata['name'] ?></h5>
                            <p class="card-text"><?php echo $cvdata['skills'] ?></p>
                            <p>Date <?php echo $cvdata['email'] ?></p>
                            <p>Time <?php echo $cvdata['tel'] ?></p>
                            
                            <p>Venu <?php echo $cvdata['add'] ?></p>
                            <br><br>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3><?php echo $cvdata['exp'] ?></h3>

                            <a href="<?php echo $cvdata['education'] ?>">
                            <button class="btn btn-primary">Register</button> </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Api Location</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                            <p>Date-19 March 2024</p>
                            <p>Time-12:30 Pm</p>
                            <p>Venu-Dr TMA PAI</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">INFORMATICA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                            <p>Date-15 Feb 2023</p>
                            <p>Time-12:30 Pm</p>
                            <p>Venu-</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>


                            <a href="https://forms.gle/9PLtgubnA3Yokziz5"> 

                            <button class="btn btn-primary">Register</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">API Workshop</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FOSTERING THE FUTURE 7.0</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                                <br>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">INFORMATICA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

            </div>



    </section>



    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




    <section id="services">



        <div class="container py-5">
            <h1 class="text-center" style="color: rgb(255, 255, 255)">Club Events</h1>

            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <div class="col">
                    <div class="card">
                        <img src="./img/event5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mismatched</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jab We Debate</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./img/event7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tape A Tale</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>FREE</h3>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>

            </div>





    </section>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->





    <!-- <section id="portfolio">Portfolio</section> -->
    <section class="contact" id="contact">







        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span>
                </h2>
                <p>For any inquiries or assistance, please don't hesitate to reach out to our dedicated support
                    <br> team. We're here to help you make the most of your event experience.
                </p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                        <p>
                            Feel free to contact us via email at arnavrishiraj2002@gmail.com or give us a call at 9625347790 for
                            prompt assistance with any queries or concerns. We look forward to hearing from you!
                        </p>
                    </div>
                    <div class="content1">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span> 9625347790 , 9399015225</span>
                            </h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>arnavrishiraj2002@gmail.com</span>
                            </h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>Manipal Unviersity Jaipur</span>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>








    </section>




<!-- </section> -->

<?php

//echo $cvdata['pp'];
?>



    
</body>
</html>