<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>



<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black">
    <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top"  src="images\31.png" width="30" height="30">BOOKINGS 4@LL,</a><font color="khaki"><h2><span><?php echo $_SESSION['admin_name']?></span></h2></font>
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
            <a class="nav-link" href="room.php">Room</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="review.php">Review</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="faq's.php">FAQ's</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>  
        </ul>
        <a href="logout.php" class="btn btn-outline-success">logout</a>

        </div>
    </div>
</nav>