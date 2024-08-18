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
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <link rel="stylesheet" href="css/style2.css">
        <style>
            *{
                padding:0px;
                margin:0px;
                box-sizing:border-box;
                font-family:'Josefin Sans',sans-serif;
            }
            body{
                background:linear-gradient(#2c5364,#0f2027);
            }
            .heading{
                 text-align: center;
                 padding: 1.5rem 0;
                 padding-bottom: 3rem;
                 font-size: 2.5rem;
                 color: var(--black);
             }
            .heading span{
                  background:orange;
                  color:white;
                  display: inline-block;
                  padding: .5rem 3rem;
                  clip-path: polygon(100% 0, 93% 50%,100% 99%,0% 100%,7% 50%,0% 0%);
            }
          
            img{
                max-width:100%;

            }
            .gallery img{
                background:#fff;
                padding:10px;
                width:100%;
                box-shadow:0px 0px 15px rgba(0,0,0,3);
                cursor: pointer;
            }
            #gallery-popup .modal-img{
                width:100%;

            }


        </style>
    </head>
    <body>


<?php include 'navbar_user.php'; ?>

<section class="gallery min-vh-100">
            <div class="py-0">
                <h2 class="heading text-white">Our<span>Gallery</span></h2>
            </div>
            <div class="container-lg">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                        <img src="images\1.jpeg" class="gallery-item" alt="Gallery1">
                    </div>
                    <div class="col">
                        <img src="images\2.jpeg" class="gallery-item" alt="Gallery2">
                    </div>
                    <div class="col">
                        <img src="images\3.jpeg" class="gallery-item" alt="Gallery3">
                    </div>
                    <div class="col">
                        <img src="images\4.jpeg" class="gallery-item" alt="Gallery4">
                    </div>
                </div><br><br>



                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                        <img src="images\5.jpeg" class="gallery-item" alt="Gallery5">
                    </div>
                    <div class="col">
                        <img src="images\6.jpeg" class="gallery-item" alt="Gallery6">
                    </div>
                    <div class="col">
                        <img src="images\9.jpeg" class="gallery-item" alt="Gallery7">
                    </div>
                    
                    <div class="col">
                        <img src="images\7.jpeg" class="gallery-item" alt="Gallery9">
                    </div>
                </div>
            </div>
 
</section>
        


<!-- Modal -->
<div class="modal fade" id="gallery-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images\1.jpeg" class="modal-img" alt="Modal Image">
      </div>
      
    </div>
  </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            document.addEventListener("click",function(e){
                if(e.target.classList.contains("gallery-item")){
                    const src = e.target.getAttribute("src");
                    document.querySelector(".modal-img").src=src;
                    const myModal=new bootstrap.Modal(document.getElementById('gallery-popup'));
                    myModal.show();
                }
            })
        </script>

        
        <footer>
            <p class="p-3 bg-dark text-white text-center">@viswanath<br>@maruti<br>@pooja</p>
        </footer>
</body>
</html>
