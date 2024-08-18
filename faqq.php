<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
<?php include 'navbar_user.php'; ?>

<div class="container">

    <h1 class="heading"><span>frequently asked questions</span></h1>

    <div class="accordion-container">

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

<footer>
    <p class="p-3 bg-dark text-white text-center">@viswanath<br>@maruti<br>@pooja</p>
</footer>

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