<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!--custom css file link  -->
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <style>
            .footer{
        background-color: #282834;
        padding: 60px 0;
       }
       .container1{
        max-width: 1170px;
        margin: auto;
        height: 170px;

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
       /* destinations */
       .banner-container1{
        display: flex;
       
       }
       
        
       .banner-container1 .bannar2 {
        display: inline-block;
        align-items: center;
        margin: 30px;
    
       }
       .banner-container1 .bannar2 h2{
        text-align: center;
        
       }
       .banner-container1 .bannar2 p{
        text-align: center;
       }
       .popular h1{
        padding-left: 20px;
       }
       .popular p{
        padding-left: 20px;
       }
       .banner-container1 .bannar2 .btn1{
        background:rgb(0, 200, 255);
        color:rgb(250, 247, 255);
        display: inline-block;
        padding: .5rem 3rem;
        clip-path: polygon(100% 0, 93% 50%,100% 99%,0% 100%,7% 50%,0% 0%);
       }
       /* GALLARY*/
       .gallary{
        text-align:center;
       }
       .gallary h1{
        background:orange;
        color:white;
        display: inline-block;
        padding: .5rem 3rem;
        clip-path: polygon(100% 0, 93% 50%,100% 99%,0% 100%,7% 50%,0% 0%);
        }

        .gallary marquee img{
            border-radius: 60px;
            padding: 20px;
        }

         /* book hotel*/

        .sinup button{
            padding: 10px 20px;
            border: none;
            background:gold;
            color: black;
            font-size: 14px;
            cursor: pointer;
            border-radius: 30px;
            font-family:'Times New Roman', Times, serif;
    
        }
       
        </style>
        
    </head>
    <body>

    <?php include 'navbar_user.php'; ?>
     
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    
  </ul>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="images\7.jpg" alt="Chicago" width=100% height=539px>
      <div class="carousel-caption">
        <h3>BANGALORE</h3>
        <p>Thank you, bangalore!</p>
        <div class="sinup">
            <button onclick="window.location.href='reservation.html';">book hotel &#10132; </button>
        
        </div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\2.jpg" alt="New York" width=100% height=539px>
      <div class="carousel-caption">
        <h3>HYDERABAD</h3>
        <p>We love HYDERABAD!</p>
        <div class="sinup">
            <button onclick="window.location.href='reservation.html';">book hotel &#10132; </button>
        
        </div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\1.jpg" alt="Australia" width=100% height=539px>
      <div class="carousel-caption">
        <h3>MUMBAI</h3>
        <p>We love mumbai!</p>
        <div class="sinup">
            <button onclick="window.location.href='reservation.html';">book hotel &#10132; </button>
    
        </div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\6.jpg" alt="London" width=100% height=539px>
      <div class="carousel-caption">
        <h3>PUNE</h3>
        <p>We love pune!</p>
        <div class="sinup">
            <button onclick="window.location.href='reservation.html';">book hotel &#10132; </button>
        
        </div>
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


        <section class="my-2">
            <div class="py-2">
                <h2 class="heading text-white"><span>About</span>Us</h2>
            </div>
            <div class="container-fluid p-1 my-1">
                <div class="row p-1 my-1">
                    <div class="col-lg-6 col-md-6 col-12 my-2">
                        <img src="images\room-5.jpg" class="img-fluid aboutimg" >
                    </div>
                    <div class="col">
                        <h4 class="display-6 text-danger">BOOKINGS 4@LL</h4>
                        <p class="py-0 text-black">It is a commercial establishment that provides lodging, meals, and other services to guests, travelers, and tourists. Hotels can range from small family-run businesses to large international chains. Most hotels list a variety of services, such as room service, laundry, and concierge. Some hotels also offer meeting and conference facilities, fitness centers, and spas.

                        As a commercial enterprise, hotels are also dependent on advertising and on potential customers becoming aware of their hotel and booking it. </p>
                        <a href="about.php" class="btn btn-success">check more </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-2">
            <div class="py-2">
                <h2 class="heading text-white">Our<span>Services</span></h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service1.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Swim Spa</h5>
                                <p class="card-text">For more details</p>
                                <a href="#" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service2.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Food&Drink</h5>
                                <p class="card-text">For more details</p>
                                <a href="food.html" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service3.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant</h5>
                                <p class="card-text">For more details</p>
                                <a href="#" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service4.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Fitness</h5>
                                <p class="card-text">For more details</p>
                                <a href="#" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service5.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Beauty Spa</h5>
                                <p class="card-text">For more details</p>
                                <a href="#" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 col-10">
                        <div class="card">
                            <img class="card-img-top" src="images\service6.png" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">BeachResort</h5>
                                <p class="card-text">For more details</p>
                                <a href="#" class="btn btn-primary">click here</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><br>

        <!--popular destination-->
       <div class="popular">
       <h1>Popular destinations</h1>
       <p>We have selected some best locations around the world for you</p>
        </div><br>
       <section class="banner-container1">
        <div class="bannar2">
            <img src="7.jpg" width="600px" alt="">
            <div class="contend">
                <h2>Bengaluru </h2>
               <P>upto 40% off
                <a href="https://www.oberoihotels.com/" class="btn1">check out</a></P> 
            </div>
        </div>
        <div class="bannar2">
            <img src="12.jpg" width="550px" alt="">
            <div class="contend">
                <h2>Pune</h2>
               <p> upto 45% off
                <a href="https://www.booking.com/city/in/pune.en.html?aid=306395;label=pune-3Xx3q03Fxt5KOld56_MCdAS392742920321:pl:ta:p1260:p2:ac:ap:neg:fi:tikwd-6177213677:lp1007769:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c;ws=&gclid=CjwKCAjw9pGjBhB-EiwAa5jl3BTFjpRbJqfRct_V7D8Gger3_YIDG6vjlUvP2eUr2wUaWFY0UMBXuBoC1IIQAvD_BwE" class="btn1">check out</a></p>
            </div>
        </div>
       </section>

        <!--our gallary-->

       <div class="gallary">
        <h1>OUR GALLARY</h1>
        <marquee scrollamount="20px">
            <img src="images/14.jpeg" width="400px" alt="">
            <img src="images/15.jpg" width="480px"  alt="">
            <img src="images/16.jpg" width="570px" alt="">
            <img src="images/17.jpg" width="480px" alt="">
            <img src="images/18.jpeg" width="480px" alt="">
        </marquee>
       </div>

         <!---->

        <section class="my-4" id="testimonials">
       
            <div class="py-0">
                <h1 class="heading"><span>Reviews</span></h1>
            </div>

            <div class="testimonial-box-container mb-5">
            <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="images\pic-4.png"/>
                            </div>
                            <div class="name-user">
                                <strong>niharika</strong>
                                <span>@niharikagupta</span>
                            </div>
                        </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                    </div>
                    <div class="client-comment">
                        <p>Good Receiving in Front of reception members…(from morning duties to Night duties). The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. Thank you! Will recommend to my colleagues!</p>
                    </div>
                </div>

                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="images\pic-3.png"/>
                            </div>
                            <div class="name-user">
                                <strong>Viswanath</strong>
                                <span>@viswanathpadala</span>
                            </div>
                        </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                    </div>
                    <div class="client-comment">
                        <p> Customer service skills, patience and tact. The ability to be calm and well organised, even when working under pressure. Hotel is very beautiful with many recreation facilities. Food is very tasty and reasonable.Thank you once again for your amazing BOOKING 4@LL.....</p>
                    </div>
                </div>


                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="images\pic-2.png"/>
                            </div>
                            <div class="name-user">
                                <strong>Pooja</strong>
                                <span>@poojavarma</span>
                            </div>
                        </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                    </div>
                    <div class="client-comment">
                        <p> Food is very good and plentiful. The amiace is nice with background music. We are staying at another hotel but like this place for its dinner facilities. So have been twice.
                            Staff's attent and polite.Just one small point to better and that is the cleanliness of the toilet room</p>
                    </div>
                </div>


                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="images\pic-1.png"/>
                            </div>
                            <div class="name-user">
                                <strong>Maruti</strong>
                                <span>@maruti</span>
                            </div>
                        </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                    </div>
                    <div class="client-comment">
                        <p>Very Good and polite Receptionist Naveen with a good respectful.A good telephone manner.Restaurant ambience is good looking &service is too good& rooms was very clean hygienic& worthable prices & just awesome must visit with friends&family.</p>
                    </div>
                </div>


            </div>
</section>


<section class="my-0">


<div class="container">

    <h1 class="heading"><span>frequently asked questions</span></h1>

    <div class="accordion-container my-5">

        <div class="accordion active">
            <div class="accordion-heading">
                <h3>How to book a hotel online with MakeMyTrip?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Booking a hotel online is easy through BOOKINGS 4@LL. All you need to do first is to download our app on your Android or iOS device or simply use your computer. On the app, tap on the room section on the top left corner and enter the details of the city, the area or the hotel. Fill out the check-in and check-out dates, along with the other details and tap Search. Use the Sort & Filter options so that you can book one as per your convenience. You can also choose hotels according to user reviews and ratings. The same follows on our site.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>How to find the cheapest hotel deals in any city?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            BOOKINGS 4@LL, being the best hotel-booking site in the country, offers several discounts on budget hotels as well. If you are looking for the cheapest hotels with amazing deals on the app, you can tap on Sort & Filter option and drag down the Price option from Rs.0 to Rs.500 or from Rs.0 to Rs.1000. Choose from the various amenities you would need during your stay including access to Wi-Fi, room service and in-house restaurants. The list will first show you the cheapest one on top. You can also sort by prices from Low to High, scroll down the list and find your preferred ones with great discounts.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>How to find the best hotels near me?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            If you are travelling to a city for the first time and are looking for hotels in the best areas, it is easy to find them on our website and our app. Let’s say, you are going to Goa and planning to book one near the most happening beaches. Once you have hit the Search option, you will find a list of all the hotels in North Goa near the famed beach areas including Baga and Calangute. You can even find out which of the areas are ideal for couples and families. Similarly, if you are looking for booking hotels in Mumbai, you can either book ones that are near the city’s major business districts, tourist areas and transportation hubs.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Where can I find current deals and offers of BOOKINGS 4@LL ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            BOOKINGS 4@LL offers plenty of deals and offers on luxury and budget hotels in India in all the cities, on a daily basis. However, these are available for a limited time and they are subject to change the next day. You can look for these deals while you are about to book the hotel after narrowing down your choices. On the app, you can check a property that has ‘Exclusive Deal’ button below its discounted rate. By tapping on it, you would know how many offers are available.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Is it ok to choose 'Pay at hotel' option for an online hotel booking?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Like prepaid bookings, pay at hotel option is also safe and reliable. It's free of cost. Though, the added advantage of choosing pay at hotel option is that you get the privilege of cancelling the hotel if you don't like its quality. However, it is important to go through all the booking and cancellation related terms and conditions carefully.
            </p>
        </div>

        

    </div>

</div>



</section>
        <section class="my-5">
            <div class="py-5">
                <centre><h2 class="heading text-white"><span>Contact</span>Us</h2></centre>
            </div>  
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">
                    <div class="form-group text-danger">
                        <label>Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group text-danger">
                        <label>Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group text-danger">
                        <label>Mobile No</label>
                        <input type="Mobile" name="mobile" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group text-danger">
                        <label>Comments</label>
                        <textarea class="form-control" name="comments">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>               
        </section>
    <br><br>
        
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

        <script>

            let accordions = document.querySelectorAll('.accordion-container .accordion');

            accordions.forEach(acco =>{
            acco.onclick = () =>{
            accordions.forEach(subAcco => { subAcco.classList.remove('active') });
            acco.classList.add('active');
            }
            })

        </script>



    </body>
</html>