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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>
    <link rel="shortcut icon" type="image/jpg" href="images/icons/favicon.ico"/>
       <link rel="stylesheet" href="style.css">
  <title>Princess Courier</title>
</head>

<body class="contactPage-body">
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
              <a class="nav-link " aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.php">TESTIMONIALS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active" href = "contact.php">
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
          <a href="" data-bs-toggle="modal"  data-bs-target="#exampleModal"><i class="fa fa-clipboard fa-fw" aria-hidden="true"></i>
          Get Quote</a>
        </div> 
        <div class="nav-login p-2 bd-highlight">
          <a href="tel:604-229-4412"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>
          Call Us</a>
        </div>    
      </div>
  
    </div>
  </header>

  <main >

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!-- modal -->
    
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

    <div class="carousel-container">
      <div id="carouselExampleDark" class="carousel carousel-fade slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="images/carousel/carousel_2.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
              <h5>MM PRINCESS COURIER LOGISTICS LTD</h5>
              <p>COURIER SERVICES IN LOWER MAINLAND BRITISH COLUMBIA</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/carousel/carousel_1.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
              <h5>We deliver fast and safe with a smile</h5>
              <p>COURIER SERVICES IN LOWER MAINLAND BRITISH COLUMBIA</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/carousel/carousel_3.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
              <h5>WE PUT PRIDE IN OUR WORKS</h5>
              <p>COURIER SERVICES IN LOWER MAINLAND BRITISH COLUMBIA.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
      <div class=" contactPage-header container-md text-center ">
        <h1>Contact Us</h1>      
      </div>

      <div class="contactPage-main container-md">
       
        <div class="row">
          <div class="form-container col-lg-6 col-md-12 col-sm-12 ">            
            
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

            <div class="info-container col-lg-6 col-md-12 col-sm-12 ">
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="need-help-title d-flex">
                    <img class="img-fluid" src="images/icons/needhelp.png">
                    <h2>TRUST US WITH YOUR DELIVERIES!</h2>
                   </div>
                    <div class="need-help-body">
                      <p>At Princess Courier, our goal is to help our customers to lower production cost at high quality services</p>
                      <p>Interested to see what we can do for you and your team? Contact us now!</p>
                    </div>
                    <div class="text-center"><img class="img-fluid p-2" src="images/icons/abb.png" width="150" alt=""><img class="img-fluid p-2" src="images/icons/truck1.png" width="250" alt=""></div>  <br>
                </div>
              </div>            
        
              <div class="row">
                <div class="contact-info col-lg-12 col-md-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-12">
                      <p> <strong>Princess Courier LTD</strong><br>        
                        12915 88 Ave Surrey, <br>
                        BC V3W 3K2 Canada <br></p>
                    </div>
                    <div class="col-lg-3 col-md-12">
                      <p><strong>Phone:</strong> <br><a href="tel:604-229-4412">(604)-229-4412</a></p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                      <p><strong>Email:</strong> <br> <a href="mailto:info@princesscourier.com"> info@princesscourier.com</a></p>
                    </div>
                  </div>
                </div> 
              </div>

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
                <li><a href="tel:+6042294412"> (604)-229-4412 </a></li>
                
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
</html>

<!-- <div class="busines-card col-lg-12 col-md-12">
  <div class="card-body">
    <div class="card">
      <div class="card-header">
        Business Hours
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Mon: 7:30 AM – 5:00 PM</li>
        <li class="list-group-item">Mon: 7:30 AM – 5:00 PM</li>
        <li class="list-group-item">Mon: 7:30 AM – 5:00 PM</li>
        <li class="list-group-item">Mon: 7:30 AM – 5:00 PM</li>
        <li class="list-group-item">Mon: 7:30 AM – 5:00 PM</li>
        <li class="list-group-item">Sat: 9:00 AM – 11:00 PM</li>
        <li class="list-group-item">Sun: 10:00 AM – 9:00 PM</li>
      </ul>
    </div>
  </div>
</div> -->