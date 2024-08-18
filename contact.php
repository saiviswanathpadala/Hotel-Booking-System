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
    </head>
    <body>


<?php include 'navbar_user.php'; ?>


<section class="my-0">
            <div class="py-0">
                <centre><h2 class="heading text-white"><span>Contact</span>Us</h2></centre>
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
        <br><br>
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