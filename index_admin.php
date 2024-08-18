<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <style>
            .footer{
        background-color: #282834;
        padding: 70px 0;
       }
       .container1{
        max-width: 1170px;
        margin: auto;
       }
       .row1{
           display: flex;
           flex-wrap: wrap;
       }

       ul{
        list-style: none;
       }

       .footer-col{
        width: 25%;
        padding: 0 15px;
       }
       .footer-col h4{
        font-size: 18px;
        color: azure;
        text-transform: capitalize;
        margin-bottom: 30px;
        position: relative;
       }

       .footer-col h4::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 60px;
       }
       .footer-col ul li:not(:last-child){
        margin-bottom: 10px;

       }
       .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
       }
       .footer-col ul li a:hover{
        color: #ffffff;
        padding-left: 10px;
       }
        </style>
    </head>
    <body>

    <?php include 'navbar_admin.php'; ?>
        
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    
  </ul>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="images\home-slide2.jpg" alt="Chicago" width=100% height=601px>
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\home-slide3.jpg" alt="New York" width=100% height=601px>
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\home-slide4.jpg" alt="Australia" width=100% height=601px>
      <div class="carousel-caption">
        <h3>Australia</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\home-slide1.jpg" alt="London" width=100% height=601px>
      <div class="carousel-caption">
        <h3>London</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    


  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        <section class="my-3">
            <div class="py-3">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images\room-5.jpg" class="img-fluid aboutimg" >
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-5">BOOKINGS 4@LL</h2>
                        <p class="py-3">This a hotel booking website</p>
                        <a href="about.php" class="btn btn-success">check more </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Services</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service1.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Swim Spa</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service2.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Food&Drink</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service3.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Restaurant</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service4.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Fitness</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service5.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beauty Spa</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service6.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Beach Resort</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">For more Details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Gallery</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery1.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery2.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery3.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery4.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery5.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery6.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery3.jpg" class="img-fluid pb-4">
                    </div>

                    <div class="col-lg-3 col-md-3 col-11">
                        <img src="images\gallery2.jpg" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="py-5">
                <centre><h2 class="text-center">Contact Us</h2></centre>
            </div>  
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Mobile No</label>
                        <input type="Mobile" name="mobile" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comments">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>               
        </section>
        
         <!--footer-->
        <footer class="footer">
        <div class="container1">
            <div class="row1">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacypolicy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shippings</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">orders status</a></li>
                        <li><a href="#">payment option</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online order</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bags</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                
                
            </div>
        </div>
    </footer>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>