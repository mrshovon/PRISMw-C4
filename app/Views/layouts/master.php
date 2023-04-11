<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url('public/img/favicon.png')?>" rel="icon">
  <link href="<?=base_url('public/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url('public/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url('public/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/animate/animate.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/style-sr.css')?>" rel="stylesheet">


</head>

<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">PRISM<span class="color-b"> PROPERTIES</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('public/home')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('public/home/aboutus')?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('public/home/contactus')?>">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?=base_url('public/home/homeloan')?>">Home-Loan</a>
              <a class="dropdown-item" href="<?=base_url('public/home/renovation')?>">Renovation</a>
              <a class="dropdown-item" href="<?=base_url('public/home/legalservices')?>">Documentation Service</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('public/home/signup')?>">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('public/login')?>">Log in</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  <!--/ Nav End /-->
    <!-- main -->
    
  <?= $this->renderSection('content') ?>
    
  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">PRISM PROPERTIES</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et voluptatum minima officia totam earum aperiam unde esse iste!.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="<?=base_url('public/home/careers')?>">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Terms and Conditions</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">contact us</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Sign-up</a>
              </li>
              <li class="list-inline-item">
                <a href="#">log-in</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">PRISM</span> All Rights Reserved.
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?=base_url('public/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?=base_url('public/lib/jquery/jquery-migrate.min.js')?>"></script>
  <script src="<?=base_url('public/lib/popper/popper.min.js')?>"></script>
  <script src="<?=base_url('public/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('public/lib/easing/easing.min.js')?>"></script>
  <script src="<?=base_url('public/lib/owlcarousel/owl.carousel.min.js')?>"></script>
  <script src="<?=base_url('public/lib/scrollreveal/scrollreveal.min.js')?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url('public/contactform/contactform.js')?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url('public/js/main.js')?>"></script>

</body>
</html>
    <!-- main -->
    