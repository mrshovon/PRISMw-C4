<?php 
   $path = $_SERVER['REQUEST_URI'];
   $path = explode('/',$path);
   $path = end($path);
   if($path == 'userdash'){
    $path = 'prism properties';
   }
   else if($path == 'add'){
    $path = 'add properties';
   } 
   else if($path == 'legalservices'){
    $path = 'documentation';
   } 
   else if($path == 'aboutus'){
    $path = 'about';
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= strtoupper($path) ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="icon" href="<?=base_url('public/images/favicon.ico')?>">

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

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="<?=base_url('public/user/homeAL/search')?>" method="post">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="area">Keyword</label>
              <input type="text" name="area" id="area" class="form-control form-control-lg form-control-a" placeholder="Seach By Area">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="purpose">Type</label>
              <select name="purpose" id="purpose" class="form-control form-control-lg form-control-a">
                <option value="rent">For Rent</option>
                <option value="sell">For Buy</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button href="" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?=base_url('public/user/homeAL/userdash')?>">PRISM<span class="color-b"> PROPERTIES</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= $path == 'userdash' ? 'active' : '' ?>" href="<?=base_url('public/user/homeAL/userdash')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $path == 'aboutus' ? 'active' : '' ?>" href="<?=base_url('public/user/homeAL/aboutus')?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $path == 'contactus' ? 'active' : '' ?>" href="<?=base_url('public/user/homeAL/contactus')?>">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $path == 'addproperty' ? 'active' : '' ?>" href="<?=base_url('public/user/homeAL/add')?>">ADD Property</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $path == 'homeloan' || $path == 'renovation' || $path == 'legalservices' ? 'active' : '' ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Service
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?=base_url('public/user/homeAL/homeloan')?>">home-loan</a>
              <a class="dropdown-item" href="<?=base_url('public/user/homeAL/renovation')?>">Renovation</a>
              <a class="dropdown-item" href="<?=base_url('public/user/homeAL/legalservices')?>">Documentation</a>
            </div>
          </li>
          <li class="nav-item">
            <?php if(!session()->get('logged_in')) {?>
            <a class="nav-link a6" href="<?=base_url('public/login')?>">Log in</a>
            <?php } else {?>
              <a class="nav-link" href="<?=base_url('public/home/signout')?>">LOGOUT</a>
              <?php } ?>
          </li>

        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <?php $name = explode(" ",session()->get('name')); ?>
      <span style="font-weight:bold;"><i class="fa-solid fa-user fa-xl" style="color: #2a791b; margin-left: 30px;"></i> <?php echo strtoupper($name[0])?></span>
    </div>
  </nav>
  <!--/ Nav End /-->
  <!-- main -->
        <?= $this->renderSection('content') ?>
  <!-- main -->
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ut facilis nesciunt itaque delectus non, consequuntur libero esse, reprehenderit vitae voluptatem dolores cumque minima maiores excepturi quos eius voluptatum sit.
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
                    <i class="fa fa-angle-right"></i> <a href="<?=base_url('public/user/homeAL/careers')?>">Careers</a>
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
                <a href="<?=base_url('public/user/homeAL/userdash')?>">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="<?=base_url('public/user/homeAL/aboutus')?>">About</a>
              </li>
              <li class="list-inline-item">
                <a href="<?=base_url('public/user/homeAL/add')?>">ADD Property</a>
              </li>
              <li class="list-inline-item">
                <a href="<?=base_url('public/user/homeAL/contactus')?>">Contact</a>
              </li>
              <li class="list-inline-item">
                <a href="<?=base_url('public/home/signout')?>">LOGOUT</a>
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
  <script src="https://kit.fontawesome.com/34df789c41.js" crossorigin="anonymous"></script>


</body>
</html>