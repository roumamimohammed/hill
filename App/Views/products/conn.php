<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Les bijoux d'occasion de luxe sont aussi sublimes que les modèles récents. Jullery shop sélectionne des créations vintage signées et pre-owned.">
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
  <link rel="icon" type="image/png" href="../images/dim.png"/>
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
  <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="../css2/bootstrap.css">
</head>
<body>

<nav>
    <div>
        <a href="#"><img class="logo1" src="../images/1.jpg" alt="logo"></a>
    </div>
</nav>
<div class="cont container-sm">
<?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>
        <form method="post" action="<?php url('products/connect_admin'); ?>" class="row g-3 border border-dark rounded">
            <div class="col-md-10">
              <label for="validationServer02" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="email" name="email" class="form-control" id="validationServer02" value="" required>
              </div>
            </div>
            <div class="col-md-10">
              <label for="validationServer02" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="validationServer02" value="" required>
            </div>
           
            <div class="col-12">
              <input type="submit" name="submit" class="btn btn-primary" id="submit" value="login">  
            </div>
          </form>
         
        </div>
   
    <div>
        <a href="#"><img class="logo1" src="../images/2.jpg" alt="logo"></a>
    </div>
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

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>