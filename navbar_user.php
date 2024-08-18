<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav{
            position:fixed;
        }
    </style>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black">
    <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top"  src="images\31.png" width="30" height="30">BOOKINGS 4@LL ,</a><font color="khaki"><h2><?php echo $_SESSION['user_name']?></h2></font>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="rooms.php">Room</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="review.php">Review</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="faqq.php">FAQ's</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>  
        </ul>
        <a href="logout.php" class="btn btn-outline-success">logout</a>

        </div>
    </div>
</nav>

</body>
</html>