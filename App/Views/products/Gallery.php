<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jullery shop</title>
  <link rel="icon" type="image/png" href="images/dim.png"/>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
<style>
.containerz {
  display: flex;
  flex-wrap: wrap;
  gap: 70px;
  justify-content: center;
  padding: 10%;
}
.box {
  justify-content: space-between;
  background-color: rgba(251, 255, 33, 0.413);
  border-radius: 10%;
  width: 200px;
  height: auto;
  align-items: center;
  text-align: center;
  padding-top: 2%;
  transition: all 0.4s;
}
</style>
</head>

<body>

  <div class="hero_areaa">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="../images/dim.png" alt="">
           
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="../home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('/products/about') ?>"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('/products/Gallery') ?>">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('/products/contact') ?>">contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('/products/conn') ?>">conecter</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </header>
   

    <div >
        <div class="e127_42">  <span  class="e127_43">Callery</span></div>
    </div>
        
    </div>
  

  
  

    <section> 
    <div class="containerz">
    <?php foreach( $galleries as $row):  ?>
     
     <div class="box">
     <div class="name">
            <h6>
              Diamond Ring
            </h6>
          </div>
         
      <div><img style="width: 130px;" src="../<?= $row["img"] ?>" alt="img"></div>
      <div class="buy"><span class="show"><?php echo $row["price"] ?> DH</span></div>
      
     </div><?php  endforeach; ?>  
    </div> 
 </section>

  
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="../images/dim.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="../images/location.png" alt="">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="../images/phone.png" alt="">
                <span>
                  +01 1234567890
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="../images/mail.png" alt="">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="../images/fb.png" alt="">
            </a>
            <a href="">
              <img src="../images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="../images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="../images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved 
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>