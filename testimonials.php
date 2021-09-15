<?php include 'contactUs-mail.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="referrer" content="strict-origin" />
  <link rel="stylesheet" href="css/bootstrap.css">  
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="lightbox.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/icons/favicon.ico"/>
  <title>Princess Courier</title>
</head>

<body>
  <header>
    <!-- NAVBAR -->
    <nav class=" navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-md">
        <a class="navbar-brand" href="index.php"><img src="images/icons/logo.png" width="200" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class=" ms-auto navbar-nav justify-content-end fs-5 text">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="aboutus.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="testimonials.php">TESTIMONIALS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href = "contact.php">
                CONTACT US
              </a>
            </li>
          </ul>
        </div>      
      </div>
    </nav>
    <!-- customer login -->
    <div class="nav-login-container bg-primary ">
      <div class=" d-flex flex-row-reverse bd-highlight container-md ">
        <div class="nav-login p-2 bd-highlight">
          <a href="https://app.princesscourier.com/login"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>
          Customer Login</a>
        </div> 
        <div class="nav-login p-2 bd-highlight">
          <a href="#" data-bs-toggle="modal"  data-bs-target="#exampleModal"><i class="fa fa-clipboard fa-fw" aria-hidden="true"></i>
          Get Quote</a>
        </div> 
        <div class="nav-login p-2 bd-highlight">
          <a href="tel:604-229-4412"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>
          Call Us</a>
        </div>    
      </div>
  
    </div>
  </header>

  <main>

        <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->

    <!-- MODAL -->
    <div class=" modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Get Quote</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-container ">            
                
              <div class="form-body">
                <div class="form-head">
                  <h4> EMAIL US</h4>
                </div>
                <div class="form-content">
                  <form action="" method="post">
    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input class="" type="text" required placeholder="Company Name *" name="company-name">
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input class="" type="text" required placeholder="Full Name *" name="user-name">
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input class="" type="email" required placeholder="Email *" name="email">
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <input class="" type="number"  required placeholder="Phone Number *" name="phone-number">
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <textarea class="" name="inquiry-message" rows="4" placeholder="Feel free to tell us about your concern*" id="message" name="message" required></textarea>
                    </div>
      
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BANNER -->
    <div class="card bg-dark text-white">
      <img src="images/carousel/carousel_1.png" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title">We deliver fast and safe with a smile</h5>
        <p class="card-text">COURIER SERVICES IN LOWER MAINLAND BRITISH COLUMBIA</p>        
      </div>
    </div>

    <!-- TESTIMONIALS -->
    <div class="container-md">

     <div class="container-fluid">
      <div class="testimonials_title pt-5 pb-3">
        <h3>WE ALWAYS MAKE SURE THAT WE MEET OUR CUSTOMER DEMANDS</h3>
       
        <p>Over 100 people and businesses have come to us to transport their product. Read their reviews to learn how great our service is.</p>
      </div>
      <div class="text-center">
        <img class="img-fluid" src="images/icons/delivery_team.png" width="1000" >
      </div>
     </div>
      
      <div class="row container-md">
        
        <div class="col-lg-4 col-md-12  " >
          <div class="card testimonials shadow-sm p-3 mb-4 bg-white rounded" >
            <!-- <img class="img-fluid img-thumbnail" src="images/testimonials/testimonial_3A.png" > -->
            <div class="card-body">
              <h5 class="card-title">
                Kelly - Hyack Tire <br>   <span><i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
              </h5>
              <p class="card-text">
                Working for a busy mechanic shop we need our parts when the vehicle is being worked on.  Roberto always serves us with fast, reliable and courtesy deliveries.  Whenever we order parts we always know they will be delivered in a timely matter.  He always makes sure we are happy. He is very professional and always polite.  We highly recommend Princess Courier Logistics to anyone looking for the best!!
              </p>
            </div>
          </div>
        </div>    
        
        <div class="col-lg-4 col-md-12  ">
          <div class="card testimonials shadow-sm p-3 mb-4 bg-white rounded">
            <!-- <img class="img-fluid img-thumbnail"  src="images/testimonials/testimonial_1A.png"> -->
            <div class="card-body">
              <h5 class="card-title">
                Cheryl Larden <br>  
              <span><i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
              </h5>
              <p class="card-text">
                I found the dispatcher and the driver to be very pleasant and respectful. They got back to me quickly with a quote and delivered my package in a shorter time frame than I was expecting. I found the rates to be good. I will definitely use them again.
              </p>
            </div>
          </div>
        </div>  
      
        <div class="col-lg-4 col-md-12  ">
          <div class="card testimonials shadow-sm p-3 mb-4 bg-white rounded ">
            <!-- <img class="img-fluid img-thumbnail" src="images/testimonials/testimonial_2A.png"> -->
            <div class="card-body">
              <h5 class="card-title">
                Rico Tamondong <br> 
          <span><i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </span>
              </h5>
              <p class="card-text">
                Im satisfied and amazed how professional they trained their drivers, always on time, cleanliness and being polite to the customers,  you guys are doing beyond our expectations,you guys are doing a great job we appreciate all the work, keep it up guys!!
              </p>
            </div>
          </div>
        </div>          
        
      </div>

      <div class="container-fluid">
        <div>
          <div class="testimonials_title pt-3 pb-2">
          <h3>WE APPRECIATE OUR CUSTOMERS ONLINE REVIEW</h3>
        </div>
        
        <!-- read more icon -->
        <div class=" d-flex flex-row bd-highlight">
          <div class="testimonials p-2 ">
            <a href="https://www.google.com/search?q=princesscourier&safe=active&bih=937&biw=1920&hl=en-GB&sxsrf=ALeKk039BrKxw08rM_TDzN0F1-xgd_Qp_g%3A1621379448214&ei=eEmkYNfDDI_2tAXvu5KABw&oq=princess&gs_lcp=Cgdnd3Mtd2l6EAMYADIECCMQJzIECCMQJzIECCMQJzIECAAQQzILCC4QsQMQxwEQowIyCAguEMcBEK8BMgQIABBDMgcILhCxAxBDMgUILhCxAzIFCAAQsQM6BwgAEEcQsAM6BQgAEJECOgcIABCxAxBDOggIABCxAxCDAToKCC4QxwEQrwEQQ1C9BVj6C2DtE2gAcAN4AIABpAGIAYEKkgEDMC45mAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=gws-wiz#lrd=0x5485d9b652282751:0xf95e79f801c08730,1,,,"> <i class="fa fa-comment" aria-hidden="true"></i>
            &nbspRead more . . .</a>
          </div> 
          <div class="testimonials p-2 ">
            <a href="https://www.google.com/search?q=princesscourier&safe=active&bih=937&biw=1920&hl=en-GB&sxsrf=ALeKk039BrKxw08rM_TDzN0F1-xgd_Qp_g%3A1621379448214&ei=eEmkYNfDDI_2tAXvu5KABw&oq=princess&gs_lcp=Cgdnd3Mtd2l6EAMYADIECCMQJzIECCMQJzIECCMQJzIECAAQQzILCC4QsQMQxwEQowIyCAguEMcBEK8BMgQIABBDMgcILhCxAxBDMgUILhCxAzIFCAAQsQM6BwgAEEcQsAM6BQgAEJECOgcIABCxAxBDOggIABCxAxCDAToKCC4QxwEQrwEQQ1C9BVj6C2DtE2gAcAN4AIABpAGIAYEKkgEDMC45mAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=gws-wiz#lrd=0x5485d9b652282751:0xf95e79f801c08730,3,,,"><i class="fa fa-pencil" aria-hidden="true"></i>
            &nbspWrite us a review</a>
          </div>  
        </div>  
        </div>
      </div>
      

    </div>

    <!-- GALLERY -->

    <div class="container-md">

        <div class="gallery-container container-fluid">
        <br>
        <hr>
        <br>
        <center><h3>GALLERY</h3></center>
        <br>
        <hr>
        <br>
          <div class="text-center mb-5">
            <a href="images/gallery/1.png" data-lightbox="mygallery" data-title="Working diligently"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/1.png"></a>
          

         
            <a href="images/gallery/2.png" data-lightbox="mygallery" data-title="Having fun at work"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/2.png" alt=""></a>
          
          
         
            <a href="images/gallery/3.png" data-lightbox="mygallery" data-title="Checking Shipping"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/3.png" alt=""></a>
       
          

        
            <a href="images/gallery/4.png" data-lightbox="mygallery" data-title="Deliveries"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/4.png" alt=""></a>
         

        
            <a href="images/gallery/5.png" data-lightbox="mygallery" data-title="Working hard"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/5.png" alt=""></a>
       

        
            <a href="images/gallery/6.png" data-lightbox="mygallery" data-title="Preparing"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/6.png" alt=""></a>
       

       
            <a href="images/gallery/7.png" data-lightbox="mygallery" data-title="Another day at work"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/7.png" alt=""></a>
        

         
            <a href="images/gallery/8.png" data-lightbox="mygallery" data-title="Preparing pick up"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/8.png" alt=""></a>
         

         
            <a href="images/gallery/9.png" data-lightbox="mygallery" data-title="Another day"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/9.png" alt=""></a>
         

         
            <a href="images/gallery/10.png" data-lightbox="mygallery" data-title="Loading"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/10.png" alt=""></a>
         

          
            <a href="images/gallery/11.png" data-lightbox="mygallery" data-title="Unloading"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/11.png" alt=""></a>
        
            <a href="images/gallery/12.png" data-lightbox="mygallery" data-title="Safety"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/12.png" alt=""></a>
         

          
            <a href="images/gallery/13.jpg" data-lightbox="mygallery" data-title="Preparing pick-up"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/13.png" alt=""></a>
         

        
            <a href="images/gallery/14.jpg" data-lightbox="mygallery" data-title="Preparing pick-up"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/14.png" alt=""></a>  
         

         
            <a href="images/gallery/map.jpg" data-lightbox="mygallery" data-title="Visit us"><img class="img-thumbnail img-fluid rounded mx-auto" src="images/gallery/gallery_icon/map.png" alt=""></a>
        </div>
          
      </div>

      <!-- GALLERY CAROUSEL -->

      <div class="gallery-carousel ">
        <br>
        <hr>
        <br>
        <center><h3>GALLERY</h3></center>
        <br>
        <hr>
        <br>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/gallery/1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/2.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/3.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/4.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/5.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/6.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/7.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/8.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/9.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/10.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/11.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/12.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/13.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/14.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/gallery/map.jpg" class="d-block w-100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      
  </div>


  </main>

<!-- FOOTER -->

<footer class="bg-primary text-light">
      
  <div class="container-md">
    <div class="d-flex row">
      <div class="col-sm-8 d-flex justify-content-center ">
        <div class="address col-sm-8 d-flex justify-content-center">
          <ul>
            <li>12915 88 Ave Surrey,</li>
            <li> BC V3W 3K2 </li>
            <li>Canada</li>
            <li><a href="tel:604-229-4412"> (604)-229-4412 </a></li>
            
          </ul>
        </div>
        <div class="col-sm-8 d-flex justify-content-center">
          <div>
           
            <p> 
            MM PRINCESS COURIER LOGISTICS LTD. is a company that delivers fast, safe and with a smile to our customers, we are courier company located in B.C
         
            </p>  
            Follow Us On
            <a 
            href="https://www.instagram.com/princesscourierlogistics/" data-bs-toggle="tooltip" 
            data-bs-placement="top" 
            title="Instagram">
              <i 
              class="fa fa-instagram fa-2x fa-fw" 
              href="www.instagram.com"></i>
            </a> <br>
            Email Us At :
            <a href="mailto:info@princesscourier.com"> info@princesscourier.com </a>
        </div>
        </div>
      </div>
      <div class="col-sm-4 d-flex justify-content-center">
          <div>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
      </div>
    </div>
    </div>
  </div>
  <hr>
  <div class="copy-right">
    <p> MM PRINCESS COURIER LOGISTICS LTD © 2020 </p>
  </div>
</footer>



  
</body> 
  <script src="js/bootstrap.js"></script>
  <script src="lightbox-plus-jquery.min.js"></script>
 
</html>